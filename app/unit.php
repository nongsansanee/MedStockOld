<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{

     protected $fillable = [ 
        'id',
        'unitid',
        'unitname',
        'unitengname',
        'status',
        'unittype',
        'shortname'
    ];
}
