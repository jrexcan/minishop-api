<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    //
    protected $fillable=['product_category_id','product_name','description','prize','status','image'];

    function getImageAttribute($value) {
        if(!empty($value)){
            return Storage::url($value);
        }else{
            $value = "";
            return $value;
        }
    }

    public function product_category(){
        return $this->belongsTo('App\ProductCategory');
    }
}
