<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit_User extends Model
{
    public $fillable = ['system_unit_id','username_id'];

    public function system_unit(){
        return $this->belongsTo('App\System_Unit','system_unit_id','id');
    } 
}


