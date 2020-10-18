<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $fillable = [
        'desc_in_text',
        'desc_in_html',
        'image',
    ];
}
