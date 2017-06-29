<?php

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
        DB::table('employee')->insert([
            'name' => str_random(10),
            'surname' => str_random(10),
            'bdate' => 0,
            'email' => 'user@gmail.com',
            'phone' => '+71231212123',
            'address' => 'Kiev',
        ]);

        DB::table('employee')->insert([
            'name' => str_random(10),
            'surname' => str_random(10),
            'bdate' => 0,
            'email' => 'name@gmail.com',
            'phone' => '+81231212123',
            'address' => 'New York',
        ]);

        DB::table('employee')->insert([
            'name' => str_random(10),
            'surname' => str_random(10),
            'bdate' => 0,
            'email' => 'mail@gmail.com',
            'phone' => '+91231212123',
            'address' => 'Amsterdam',
        ]);
    }
}
