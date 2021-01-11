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
            $table->string('imgTematica')->unique();
            $table->string('nombretematica');
            $table->timestamps();
        });
        
        Schema::create('croms', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('imgCromo')->unique();
            $table->string('nombreCromo');
            $table->unsignedBigInteger('id_tematica')->nullable();
            $table->foreign('id_tematica')->references('id')->on('tematicas');
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
