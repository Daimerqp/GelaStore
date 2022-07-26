<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacionuser', function (Blueprint $table) {
            $table->integer('ubicacionId')->unique('ubicacionId');
            $table->string('pais', 100);
            $table->string('departamento', 100);
            $table->string('municipio', 100);
            $table->string('direccion', 100);
            $table->integer('codigoPost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacionuser');
    }
}
