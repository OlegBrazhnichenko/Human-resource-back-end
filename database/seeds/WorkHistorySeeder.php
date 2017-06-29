<?php

use Illuminate\Database\Seeder;

class WorkHistorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_history')->insert([
            'employee_id' => 1,
            'company_id' => 1,
            'start_date' => rand(13984403700, 14984403700),
            'end_date' => 0,
            'role' => str_random(10),
        ]);

        DB::table('work_history')->insert([
            'employee_id' => 2,
            'company_id' => 2,
            'start_date' => rand(13984403700, 14984403700),
            'end_date' => 0,
            'role' => str_random(10),
        ]);

        DB::table('work_history')->insert([
            'employee_id' => 3,
            'company_id' => 3,
            'start_date' => rand(13984403700, 14984403700),
            'end_date' => 0,
            'role' => str_random(10),
        ]);
    }
}
