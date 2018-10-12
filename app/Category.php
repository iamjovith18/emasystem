<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=
    [
        'category_name','type'
    ];

    public function accessory(){
        return $this->hasMany('App\accessory');
    }

    public function component(){
        return $this->hasMany('App\Component');
    }
}
