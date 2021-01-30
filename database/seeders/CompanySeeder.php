<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Department;
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


        $d = new Department();
        $d->name="HR";
        $d->company_id =1;
        $d->save();

        $d = new Department();
        $d->name="IT";
        $d->company_id =1;
        $d->save();

        $d = new Department();
        $d->name="Sales";
        $d->company_id =2;
        $d->save();

    }
}
