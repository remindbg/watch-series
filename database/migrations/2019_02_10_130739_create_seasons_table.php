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
            $table->text('description')->nullable();
            $table->timestamps();
            $table->unsignedInteger('number');
            $table->unsignedInteger('series_id')->nullable();
            $table->unsignedInteger('iscurrent')->nullable();

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
