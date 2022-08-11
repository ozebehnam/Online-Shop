<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = false;
    public $fillable = ['title','url','content','date','info','img','menu_id','price'];
}