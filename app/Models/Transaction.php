<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Transaction extends Model{
    use HasFactory;

    public $fillabel =[
        'user_id',
        'Jasa_id',
        'price',
        'status',
        'snap_token',
    ];
}
?>