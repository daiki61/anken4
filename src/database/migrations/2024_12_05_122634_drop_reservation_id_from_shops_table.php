<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropReservationIdFromShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            if (Schema::hasColumn('shops', 'reservation_id'))
            $table->dropColumn('reservation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            if (Schema::hasColumn('shops', 'reservation_id'))
            $table->integer('reservation_id')->nullable(); 
        });
    }
}
