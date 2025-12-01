<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/swing-pasta', function () {
    return view('clientes.swing-pasta.menu');
});
Route::get('/vous-amour', function () {
    return view('clientes.vous-amour.menu');
});
