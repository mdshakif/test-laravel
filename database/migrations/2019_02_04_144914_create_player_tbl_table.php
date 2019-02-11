<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_tbl', function (Blueprint $table) {
            $table->string('player_id');
            $table->string('player_name');
            $table->string('player_country');
            $table->string('player_email');
            $table->string('player_password');
            $table->string('player_address');
            $table->string('player_selecttem');
            $table->string('player_yer');
            $table->string('player_role');
            $table->string('player_image');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_tbl');
    }
}
