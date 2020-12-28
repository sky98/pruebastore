<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit');
            $table->string('name');
            $table->string('telephone');
            $table->string('department');
            $table->string('city');
            $table->string('address');
            $table->boolean('state');
            $table->string('email', 60)->unique();
            $table->string('password');
            $table->unsignedBigInteger('establisment_id');
            $table->timestamps();

            $table->foreign('establisment_id')->references('id')->on('establisments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
