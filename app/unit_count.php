<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit_count extends Model
{
    protected $fillable = [ 
        'id',
        'countname'
     //   'status'
      
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
}
