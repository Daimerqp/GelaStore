<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->integer('orderDetId')->unique('orderDetId');
            $table->integer('productId');
            $table->integer('orderId');
            $table->integer('cantidad');
            $table->integer('total');
            $table->foreign('orderId', 'orderdetail_ibfk_1')->references('orderId')->on('orden')->onUpdate('cascade');
            $table->foreign('productId', 'orderdetail_ibfk_2')->references('productId')->on('product')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
}
