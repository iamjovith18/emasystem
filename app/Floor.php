<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public $fillable = ['floor_name','floor_id','id'];

    public function accessory_floor(){
        return $this->hasMany('App\Accessory_User','App\Floor','floor_id','id');
    }
}
