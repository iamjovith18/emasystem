<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercred extends Model
{
    protected $fillable =[
        'fname','lname','job_title','email_add','username','password','crms_password','department','batch','extension_no','status',
    ];

    public function components(){
        return $this->hasMany('App\Component');
    }

    public function component_users(){
        return $this->belongsToMany('App\Usercred','App\Component','App\Component_User');
    }

    public function accessory_user(){
        return $this->belongsToMany('App\Usercred','App\accessory','App\Accessory_User');
    }

    public function accessories(){
        return $this->belongsToMany('App\accessory');
    }

    public function system_user(){
        return $this->belongsToMany('App\Usercred','App\System_Unit','App\Unit_User');
    }

    public function access(){
        return $this->belongsToMany('App\Access');
    }

    public function access_users(){
        return $this->belongsToMany('App\Usercred','App\Access','App\Access_Usercred');
    }

}
