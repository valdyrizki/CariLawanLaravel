<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_players', function (Blueprint $table) {
            $table->bigIncrements('player_id');
            $table->integer('login_id');
            $table->string('player_firstnm',15);
            $table->string('player_lastnm',15);
            $table->date('player_brtdt');
            $table->enum('player_sex',["L","P"]);
            $table->string('player_phone',16);
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
        Schema::dropIfExists('cfg_players');
    }
}
