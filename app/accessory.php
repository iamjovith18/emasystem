<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accessory extends Model
{
    protected $fillable = array('accessory_name','category_id','brand_id','model_no','serial_no','quantity','min_qty'  );

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}

