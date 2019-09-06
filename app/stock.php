<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = [ 
        'id',
        'stockname',
        'stockengname'
        // 'status'

     
    ];

    public function getStatusName(){
        switch($this->status){
            case 1:
                return "เปิดใช้งาน";
                break;
            case 0:
                return "ปิดใช้งาน";
                break;   
            default:
                return "Opps....";
                break;
        }
    }

    // public function stock(){
    //     return $this->hasMany(Stock_category::class);
    // }
}
