<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function (Blueprint $table) {
            $table->integer('orderId')->unique('orderId');
            $table->integer('userId');
            $table->date('fecha');
            $table->integer('pagId');
            
            $table->foreign('userId', 'orden_ibfk_1')->references('userId')->on('user')->onUpdate('cascade');
            $table->foreign('pagId', 'orden_ibfk_2')->references('pagId')->on('paymethod')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden');
    }
}
