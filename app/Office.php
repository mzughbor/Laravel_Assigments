<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'city',
        'phone',
        'address1',
        'address2',
        'country',
        'state',
        'postal_code',
        'temtory',
    ];
}
