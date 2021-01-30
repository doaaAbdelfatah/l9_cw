<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new Employee();
        $e->name ="Ahmed Ali";
        $e->department_id = 1;
        $e->save();

        $e = new Employee();
        $e->name ="Dina Ali";
        $e->department_id = 1;
        $e->save();

        $e = new Employee();
        $e->name ="Sara Ali";
        $e->department_id = 2;
        $e->save();

    }
}
