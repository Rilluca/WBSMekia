<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable=['name','price','image','quantity','categoryID'];
    
    public function category(){
        return $this->belongsTo('Models\Category');
    }

    /*public function mycart(){
        return $this->hasMany('App\myCart');
    }*/
}