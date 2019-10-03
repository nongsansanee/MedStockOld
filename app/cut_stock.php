<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cut_stock extends Model
{
   

    protected $fillable=[
        'id',
        'stock_id',
        'stock_categories_id',
        'item_code',
        'item_use',
        'date_use',
        'time_use',
        'userin'

    ];
}
