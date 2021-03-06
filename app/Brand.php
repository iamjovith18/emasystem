<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=['brand'];

    public function brands(){
        return $this->hasMany('App\accessory','App\System_Unit','App\Component_User');
    }

}
