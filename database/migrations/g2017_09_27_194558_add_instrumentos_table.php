<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstrumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('category_id')->unsigned();
            $table->double('stock');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')->on('categories')
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
        Schema::dropIfExists('instrumentos');
    }
}
