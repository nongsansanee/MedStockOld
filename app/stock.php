<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = [ 
        'id',
        'stockname',
        'stockengname',
        'status',
        'shortname'
    ];
}
