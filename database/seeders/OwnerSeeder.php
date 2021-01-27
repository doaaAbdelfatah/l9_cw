<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Owner();
        $m->name ="ali";
        $m->save();

        $m = new Owner();
        $m->name ="sara";
        $m->save();
    }
}
