<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tematicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombretematica');
            $table->timestamps();
        });
        
        Schema::create('croms', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->binary('imgCromo');
            $table->string('nombreCromo');
            $table->unsignedBigInteger('idTematica');
            $table->foreign('idTematica')->references('id')->on('tematicas');
            $table->unsignedBigInteger('idBaul');
            $table->foreign('idBaul')->references('id')->on('bauls');
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
        Schema::dropIfExists('tematicas');
        Schema::dropIfExists('croms');
    }
}
