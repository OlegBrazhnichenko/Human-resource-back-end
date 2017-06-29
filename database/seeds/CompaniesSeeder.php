<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => str_random(10),
            'nipt' => rand(10000,99999),
            'address' => 0
        ]);

        DB::table('companies')->insert([
            'name' => str_random(10),
            'nipt' => rand(10000,99999),
            'address' => str_random(10)
        ]);

        DB::table('companies')->insert([
            'name' => str_random(10),
            'nipt' => rand(10000,99999),
            'address' => str_random(10)
        ]);
    }
}
