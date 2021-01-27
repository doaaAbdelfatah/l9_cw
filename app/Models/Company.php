<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    function manager(){
        return $this->hasOne(Manager::class ,"id" ,"id");
    }
}
