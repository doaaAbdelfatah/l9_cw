<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Car();
        $m->model ="BMW";
        $m->owner_id =1;
        $m->save();


        $m = new Car();
        $m->model ="Toyta";
        $m->owner_id =2;
        $m->save();
    }
}
