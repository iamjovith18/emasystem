<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $fillable =['access_name'];

    public function users(){
        return $this->belongsToMany('App\Usercred');
    }

    public function access_users(){
        return $this->hasMany('App\Access_Usercred','id','access_id');
    }
}
