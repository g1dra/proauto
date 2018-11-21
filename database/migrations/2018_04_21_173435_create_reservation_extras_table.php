<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_extras', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("reservations_id");
            $table->unsignedInteger("extras_id");

            $table->foreign('reservations_id')
                  ->references('id')
                  ->on('reservations')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('extras_id')
                ->references('id')
                ->on('extras')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations_extras');
    }
}
