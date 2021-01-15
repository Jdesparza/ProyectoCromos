<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCromosUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cromosUsuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_albumUsuario')->nullable();
            $table->foreign('id_albumUsuario')->references('id')->on('albumUsuario');
            $table->unsignedBigInteger('id_cromos')->nullable();
            $table->foreign('id_cromos')->references('id')->on('croms');
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
        Schema::dropIfExists('cromosUsuario');
    }
}
