<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component_User extends Model
{
    public $fillable=[
        'component_id','username_id'
    ];

    public function component(){
        return $this->belongsTo('App\Component','component_id','id');
    }
}
