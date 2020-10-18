<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'sales_rep_empoyee_num',
        'name',
        'first_name',
        'last_name',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'postal_code',
        'country',
        'credit_limit',
    ];
}
