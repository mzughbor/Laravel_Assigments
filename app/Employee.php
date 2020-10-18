<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'office_id',
        'reports_to',
        'first_name',
        'last_name',
        'extention',
        'email',
        'job_title',

    ];
}
