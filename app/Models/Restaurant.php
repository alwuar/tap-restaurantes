<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
   use HasFactory;

    protected $fillable = ['name', 'first_visit_amount', 'repeat_visit_amount'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
