<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'order_id',
        'status',
        'start_count',
        'remains'
    ];
}
