<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function products (){
        return $this->hasMany(Product::class ,"category_id" ,"id");
    }

    function main_cat(){
        return $this->belongsTo(Category::class ,"category_id" ,"id");
    }

    function sub_cats(){
        return $this->hasMany(Category::class ,"category_id" ,"id");
    }
}
