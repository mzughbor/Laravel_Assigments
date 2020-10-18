<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymment extends Model
{
    protected $fillable = [
        'check_num',
        'customer_id',
        'paymment_date',
        'amount',
    ];
}
