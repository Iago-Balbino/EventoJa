<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('local');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->integer('num_max_participantes');

            $table->bigInteger('tipo_programacao_id')->unsigned();

            //$table->timestamps();
        });

        Schema::table('eventos', function($table){
             $table->foreign('tipo_programacao_id')->references('id')->on('tipo_programacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
