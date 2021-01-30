<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class ,"user_id" ,"id");
    }
    function order_details(){
        return $this->hasMany(OrderDetail::class );
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, OrderDetail::class);
    }
}
