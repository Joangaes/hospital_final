<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientDietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacient_diets', function (Blueprint $table) {
            $table->increments('pacient_diet_id');
            $table->integer('pacient_id')->unsigned();
            $table->timestamps();
            $table->string('food');
            $table->dateTime('time_date');

            $table->foreign('pacient_id')
            ->references('pacient_id')
            ->on('pacients')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacient_diets');
    }
}
