<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'component_name','category_id','brand_id','serial_no','total','order_qty'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\brand');
    }

    public function user(){
        return $this->belongsTo('App\Usercred');
    }

  
}