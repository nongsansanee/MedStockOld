<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_admin extends Model
{
    protected $fillable = [ 
        'id',
        'stock_id',
        'unit_id'
      
    ];

    protected $casts = [
        'unit_id' => 'array'
    ];
}
