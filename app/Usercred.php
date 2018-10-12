<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercred extends Model
{
    protected $fillable =[
        'fname','lname','job_title','email_add','username','password','department','batch','extension_no','status',
    ];

    public function components(){
        return $this->hasMany('App\Component');
    }

    public function component_users(){
        return $this->belongsToMany('App\Usercred','App\Component','App\Component_User');
    }


    
}
