<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNurseActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_activities', function (Blueprint $table) {
            $table->increments('nurse_activities_id');
            $table->integer('nurse_id')->unsigned();
            $table->timestamps();
            $table->string('activity');
            $table->datetime('schedule_in');
            $table->datetime('schedule_out');
            $table->integer('duration');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_activities');
    }
}
