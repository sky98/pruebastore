<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstablismentProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establisment_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establisment_id');
            $table->unsignedBigInteger('product_id');
       

            $table->foreign('establisment_id')->references('id')->on('establisments');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establisment_product');
    }
}
