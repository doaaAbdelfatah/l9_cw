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

    function depts(){
        return $this->hasMany(Department::class);
    }
    function emps(){
        return $this->hasManyThrough(Employee::class ,Department::class);
    }
}
