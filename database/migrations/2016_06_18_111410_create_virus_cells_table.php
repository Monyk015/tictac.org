<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirusCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virus_cells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('virus_match_id')->index();
            $table->integer('x');
            $table->integer('y');
            $table->string('state');
            $table->index(['x','y']);
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
        Schema::drop('virus_cells');
    }
}
