<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public $fillable = ['station_name'];

    public function accessory_station(){
        return $this->hasMany('App\Accessory_User');
    }
}
