<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('horas');
            $table->datetime('inicio_ensayo');
            $table->datetime('fin_ensayo');
            $table->double('costo');
            $table->text('observacion');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('usersmusic')
            ->onDelete('cascade');

            $table->foreign('room_id')
            ->references('id')->on('rooms')
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
        Schema::dropIfExists('reservas');
    }
}
