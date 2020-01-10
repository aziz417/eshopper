<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name' ,'slug', 'category_id', 'brand_id', 'description', 'price', 'image', 'size', 'color', 'status', 'featured'];
}

/*public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }
    
public function brand(){
        return $this->hasOne('App\Brand','id','brand_id');
    }*/
