<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropPrimary(''); 
            $table->unique('email');
            $table->index('user_id');
            $table->index('email');
            $table->primary('user_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',
        function (Blueprint $table) {
            
            $table->dropPrimary('');
            $table->dropUnique('email');
            $table->dropIndex('PRIMARY');
            $table->dropIndex('email');
            $table->primary('email');
        });
    }
}
