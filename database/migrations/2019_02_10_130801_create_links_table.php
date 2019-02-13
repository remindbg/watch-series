<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isactive')->default(0);
            $table->text('url')->nullable();
            $table->string('domain')->nullable();
           // TODO: regex stuff and better columns with more info
            $table->unsignedInteger('visits')->default(1);
            $table->unsignedInteger('likes')->default(1);
            $table->unsignedInteger('dislikes')->default(0);
            $table->unsignedInteger('isbroken')->default(0);

            $table->unsignedInteger('episode_id')->nullable();
            $table->foreign('episode_id')->references('id')->on('episodes')->onDelete('cascade');
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
        Schema::dropIfExists('links');
    }
}
