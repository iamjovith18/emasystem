<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id','status_name'];

    
    
    public function accessory_status(){
        return $this->hasMany('App\accessory');
    }

    public function system_unit_status(){
        return $this->hasMany('App\System_Unit');
    }
}