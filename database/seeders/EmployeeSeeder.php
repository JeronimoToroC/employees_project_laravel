<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'fullname' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '123-456-7890',
            'position' => 'Manager',
            'age' => 35,
            'salary' => 50000.00,
            'active' => true,
            'hireDate' => '2021-01-01',
        ]);

        Employee::create([
            'fullname' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'phone' => '555-555-5555',
            'position' => 'Developer',
            'age' => 28,
            'salary' => 75000.00,
            'active' => true,
            'hireDate' => '2021-02-15',
        ]);

        Employee::create([
            'fullname' => 'Bob Johnson',
            'email' => 'bjohnson@example.com',
            'phone' => '555-123-4567',
            'position' => 'Sales Representative',
            'age' => 42,
            'salary' => 60000.00,
            'active' => true,
            'hireDate' => '2021-03-01',
        ]);

        Employee::create([
            'fullname' => 'Alice Lee',
            'email' => 'alee@example.com',
            'phone' => '555-987-6543',
            'position' => 'Marketing Manager',
            'age' => 30,
            'salary' => 80000.00,
            'active' => true,
            'hireDate' => '2021-04-15',
        ]);
    }
}
