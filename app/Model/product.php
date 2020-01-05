<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name' ,'slug', 'category_id', 'brand_id', 'description', 'price', 'image', 'size', 'color', 'status', 'featured'];
}
