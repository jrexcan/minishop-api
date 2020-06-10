<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //

    protected $fillable=['product_category_name'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
