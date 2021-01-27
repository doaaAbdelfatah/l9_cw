<?php

namespace App\Models;

use Database\Seeders\MechanicSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    function mechanic(){
        return $this->hasOneThrough(Mechanic::class , Car::class  );
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

}
