<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $timestamps = false;

    protected $fillable = ['name','contact1','contact2','address'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
