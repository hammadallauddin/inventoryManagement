<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function orderDetail(){
        return $this->hasOne('App\OrderDetail');
    }
}
