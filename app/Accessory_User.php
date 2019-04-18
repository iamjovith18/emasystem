<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory_User extends Model
{
    public $fillable= [
        'username_id','accessory_id','floor_id','station_id','id'
    ];

    public function accessory(){
        return $this->belongsTo('App\accessory','accessory_id','id');
    }

    public function users(){
        return $this->belongsTo('App\Usercred','username_id','id');
    }

    public function floor(){
        return $this->belongsTo('App\Floor');
    }

    public function station(){
        return $this->belongsTo('App\Station');
    }

    

}
