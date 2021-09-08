<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'category',
        'type',
        'rate',
        'min',
        'max',
        'dripfeed',
        'refill',
        'description'
    ];
    public $incrementing=false;
}
