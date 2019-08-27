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

    public function getTypeName(){
        switch($this->unittype){
            case 1:
                return "สำนักงาน";
                break;
            case 2:
                return "สาขาวิชา";
                break;
            case 3:
                return "หน่วยงาน";
                break;
            default:
                return "Opps....";
                break;
        }
    }


}
    
    
