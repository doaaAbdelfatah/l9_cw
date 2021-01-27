<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Company();
        $c->name = "NH";
        $c->save();

        $c = new Company();
        $c->name = "Skills Dynamix";
        $c->save();
    }
}
