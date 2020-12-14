<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablismentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establisments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit');
            $table->string('name');
            $table->string('department');
            $table->string('city');
            $table->string('address');
            $table->string('telephone');            
            $table->boolean('state');
            $table->unsignedBigInteger('inventories_id');
            $table->timestamps();

            $table->foreign('inventories_id')->references('id')->on('inventories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establisments');
    }
}
