<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorcycleRent extends Model
{
    use HasFactory;
    protected $fillable = [
        'motorcycle_name',
        'price',
        'motorcycle_image',
        'transmisi',
        'engine_displacement',
        'fuel_capacity',
        'type'
    ];
}
