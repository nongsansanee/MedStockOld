<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_item extends Model
{


    protected $fillable = [ 
        'id',
        'stocks_id',
        'stock_categories_id',
        'item_code',
        'item_name',
        'unit_counts_id',
        'item_receive',
        'date_receive',
        'date_expire',
        'price',
        'status'
    ];

    public function unit_count(){
        return $this->hasOne('App\unit_count','id','unit_counts_id');
        
    }

    public function cut_stock(){
        return $this->hasMany('App\cut_stock','item_code','item_code');
        
    }

    public static function loadData($fileName){
        $stockItemRecords = loadCSV($fileName);
        \Log::info($stockItemRecords[0]);
        foreach($stockItemRecords as $stockItemRecord){
            stock_item::create($stockItemRecord);
        }
    }
}
