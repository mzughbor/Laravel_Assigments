<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_line_id',
        'name',
        'scale',
        'vendor',
        'pdt_description',
        'qty_in_stock',
        'buy_price',
        'msrp',
    ];
}
