<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirusMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virus_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player1_id');
            $table->integer('player2_id');
            $table->index(['player1_id','player2_id']);
            $table->integer('field_height');
            $table->integer('field_width');
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
        Schema::drop('virus_matches');
    }
}
