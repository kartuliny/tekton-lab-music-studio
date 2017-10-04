<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetallereservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('detallereservas',function(Blueprint $table){
            $table->increments('id');
            $table->integer('instrumento_id')->unsigned();
            $table->integer('reserva_id')->unsigned();
            $table->integer('cantidad');
            $table->double('precio');
            $table->timestamps();
            
            $table->foreign('instrumento_id')
            ->references('id')->on('instrumentos')
            ->onDelete('cascade');

            $table->foreign('reserva_id')
            ->references('id')->on('reservas')
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
        Schema::dropIfExists('detallereservas');
    }
}
