<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Manager();
        $m->name = "ahmed";
        $m->save();
        $m = new Manager();
        $m->name = "dina";
        $m->save();
    }
}
