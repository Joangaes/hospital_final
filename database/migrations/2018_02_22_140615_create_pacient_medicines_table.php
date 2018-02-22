<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacient_medicines', function (Blueprint $table) {
            $table->increments('pacient_medicines_id');
            $table->integer('pacient_id')->unsigned();
            $table->integer('nurse_id')->unsigned();
            $table->timestamps();
            $table->string('medicine');
            $table->integer('dosis_interval');

            $table->foreign('nurse_id')
            ->references('nurse_id')
            ->on('nurses')
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
        Schema::dropIfExists('pacient_medicines');
    }
}
