<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Mechanic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            ManagerSeeder::class,
            CompanySeeder::class,
            OwnerSeeder::class,
            CarSeeder::class,
            MechanicSeeder::class,
            EmployeeSeeder::class,
        ]);

        Category::factory(15)->create();
        Employee::factory(1000)->create();
    }
}
