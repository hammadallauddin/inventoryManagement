<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = ['name','supplier_id','category_id','rate','quantity'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function orderDetails(){
        return $this->hasMany('App\OrderDetail');
    }
}
