<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('userId')->unique('userId');
            $table->string('Nombre', 100);
            $table->string('apellido', 100);
            $table->date('fNacimiento');
            $table->string('email', 100);
            $table->string('password', 100);
            $table->integer('ubicacionId');
            
            $table->foreign('ubicacionId', 'user_ibfk_1')->references('ubicacionId')->on('ubicacionuser')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
