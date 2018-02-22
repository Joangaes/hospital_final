<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacient_rooms', function (Blueprint $table) {
            $table->increments('pacient_room_id');
            $table->integer('pacient_id')->unsigned();
            $table->integer('nurse_id')->unsigned();
            $table->timestamps();
            $table->string('room_number');
            $table->string('indications');

            $table->foreign('pacient_id')
            ->references('pacient_id')
            ->on('pacients')
            ->onDelete('cascade');

            $table->foreign('nurse_id')
            ->references('nurse_id')
            ->on('nurses')
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
        Schema::dropIfExists('pacient_rooms');
    }
}
