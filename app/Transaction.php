<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillables = ['customer_id','product_id','quantity','total'];

    public function products(){
        return $this->hasMany('App\Product');
    }
    
}
