<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access_Usercred extends Model
{
    public $table = "access_usercred";
    public $fillable =['access_id','username_id','id'];

    public function accesses(){
        return $this->belongsTo('App\Access','access_id','id');
    }

    public function users(){
        return $this->belongsTo('App\Usercred','usercred_id','id');
    }
}
