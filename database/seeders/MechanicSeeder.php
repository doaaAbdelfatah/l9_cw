<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Seeder;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Mechanic();
        $m->name ="ahmed";
        $m->car_id =1;
        $m->save();

        $m = new Mechanic();
        $m->name ="Mohamed";
        $m->car_id =2;
        $m->save();
    }
}
