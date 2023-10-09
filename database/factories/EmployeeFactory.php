<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use Faker\Generator as Faker;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'position' => $this->faker->jobTitle,
            'age' => $this->faker->numberBetween(18, 65),
            'salary' => $this->faker->randomFloat(2, 30000, 80000),
            'active' => $this->faker->boolean,
            'hireDate' => $this->faker->date,
        ];
    }
}
