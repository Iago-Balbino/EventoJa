<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');

            $table->bigInteger('tipo_programacao_id')->unsigned();
            $table->bigInteger('evento_id')->unsigned();

        });

        Schema::table('programacao', function($table){
            $table->foreign('tipo_programacao_id')->references('id')->on('tipo_programacao');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programacao');
    }
}
