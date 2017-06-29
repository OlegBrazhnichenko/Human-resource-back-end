<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('company_id');
            $table->bigInteger('start_date')->defaultValue(0);
            $table->bigInteger('end_date')->defaultValue(0);
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('work_history');
    }
}
