<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_Unit extends Model
{
    protected $fillable = [
        'brand_id','category_id','model','asset_tag','brand_id','serial_no','total','order_qty'
    ];

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\Usercred');
    }

    
    public function unit_user(){
        return $this->hasMany('App\Unit_User','id','system_unit_id');
    }


}
