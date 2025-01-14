<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUuidreservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uuidreservations', function (Blueprint $table) {
            $table->integer('reservation_id')->primary();
            $table->uuid('uuid');
            $table->string('shopname');
            $table->integer('shop_id');
            $table->string('reservationDate');
            $table->string('reservationTime');
            $table->string('reservationNum');
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
        Schema::dropIfExists('uuidreservations');
    }
}
