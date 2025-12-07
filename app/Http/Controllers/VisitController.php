<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Restaurant;

class VisitController extends Controller
{
    // Registrar visita
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'device_id' => 'nullable|string',
        ]);

        $restaurant = Restaurant::find($request->restaurant_id);

        // Determinar si es usuario logueado
        $user_id = auth()->check() ? auth()->id() : null;
        $device_id = $request->device_id ?? null;

        // Contar visitas para este usuario o dispositivo
        if($user_id) {
            $visit_count = Visit::where('restaurant_id', $restaurant->id)
                                ->where('user_id', $user_id)
                                ->count();
        } elseif($device_id) {
            $visit_count = Visit::where('restaurant_id', $restaurant->id)
                                ->where('device_id', $device_id)
                                ->count();
        } else {
            return response()->json(['error' => 'No se pudo identificar visita'], 422);
        }

        $visit_number = $visit_count + 1;
        $amount = ($visit_count == 0) ? $restaurant->first_visit_amount : $restaurant->repeat_visit_amount;

        $visit = Visit::create([
            'restaurant_id' => $restaurant->id,
            'user_id' => $user_id,
            'device_id' => $user_id ? null : $device_id,
            'visit_number' => $visit_number,
            'amount' => $amount,
        ]);

        return response()->json([
            'message' => 'Visita registrada',
            'visit' => $visit
        ]);
    }

    // Dashboard restaurante
    public function dashboard($restaurant_id)
    {
        $restaurant = Restaurant::findOrFail($restaurant_id);

        $visits = Visit::where('restaurant_id', $restaurant->id)->get();

        $total_by_month = Visit::where('restaurant_id', $restaurant->id)
            ->selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(amount) as total')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        $average_ticket = $visits->avg('amount');

        return view('dashboard_visits', compact('restaurant', 'total_by_month', 'average_ticket'));
    }
}
