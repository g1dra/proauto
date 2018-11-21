<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('model');
            $table->integer('doors');
            $table->integer('passengers');
            $table->string('transmission');
            $table->boolean('air_conditioning');
            $table->string('luggage');
            $table->integer('price_3');
            $table->integer('price_6');
            $table->integer('price_14');
            $table->string("img_path");
            $table->string("alt");
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
        Schema::dropIfExists('cars');
    }
}
