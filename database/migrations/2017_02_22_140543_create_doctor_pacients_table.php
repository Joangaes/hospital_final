<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorPacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_pacients', function (Blueprint $table) {
            $table->increments('doctor_pacient_id');
            $table->integer('doctor_id')->unsigned();
            $table->integer('pacient_id')->unsigned();
            $table->timestamps();

            $table->foreign('doctor_id')
            ->references('doctor_id')
            ->on('doctors')
            ->onDelete('cascade');

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
        Schema::dropIfExists('doctor_pacients');
    }
}
