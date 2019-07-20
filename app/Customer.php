<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $fillable = ['name','contact1','contact2','address'];

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
