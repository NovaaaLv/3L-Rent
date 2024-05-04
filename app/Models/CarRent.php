<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRent extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_name',
        'price',
        'car_image',
        'seat',
        'car_trunk',
        'transmisi',
        'fuel',
        'type'
    ];
}
