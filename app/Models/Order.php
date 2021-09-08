<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'order_id',
        'service_id',
        'link',
        'quantity',
        'runs',
        'interval',
        'charge',
        'currency',
        'my_charge'
    ];
}
