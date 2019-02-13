<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            // TODO : I def need to  rework that monster that im gonna create right now -.-
            $table->increments('id');
            $table->string('title');
            // TODO: the number     column is dumb as fuck, hope i can fix that later on, for now its useless and im not gonna use it
            $table->unsignedInteger('number')->nullable();
            $table->unsignedInteger('series_id')->nullable();
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
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
        Schema::dropIfExists('seasons');
    }
}
