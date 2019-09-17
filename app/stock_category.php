<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_category extends Model
{
    public function stock(){
        // return $this->belongsTo('App\Stock');

        return $this->hasOne('App\Stock','id','stock_id');
    }
    
}
