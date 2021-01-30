<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" =>$this->faker->name,
            "email" =>$this->faker->unique()->email,
            "mobile" =>$this->faker->unique()->phoneNumber,
            "address" =>$this->faker->address,
            "department_id" => Department::inRandomOrder()->first()->id,

        ];
    }
}
