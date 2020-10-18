<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
    ];
}
