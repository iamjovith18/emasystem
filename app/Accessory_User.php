<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory_User extends Model
{
    public $fillable= [
        'username_id','accessory_id','id'
    ];

    public function accessory(){
        return $this->belongsTo('App\Accessory','accessory_id','id');
    }
}
