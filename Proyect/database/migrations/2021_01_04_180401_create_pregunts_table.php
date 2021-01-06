<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuests', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });

        Schema::create('pregunts', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->integer('nivel');
            $table->string('respuestaCorrecta');
            $table->string('respuestaError1');
            $table->string('respuestaError2');
            $table->string('respuestaError3');
            $table->unsignedBigInteger('idTematica');
            $table->foreign('idTematica')->references('id')->on('tematicas');
            $table->unsignedBigInteger('idRespuestas');
            $table->foreign('idRespuestas')->references('id')->on('respuests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuests');
        Schema::dropIfExists('pregunts');
    }
}
