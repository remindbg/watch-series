<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->unsignedInteger('views')->default(1);
            $table->boolean('isactive')->default(1);
            $table->text('image')->nullable;
            $table->boolean('istrending')->default(0);
            $table->boolean('haveseasons')->default(1);
            // TODO featured
            $table->string('year')->nullable();
            $table->string('country')->nullable();
            // TODO - dealing with year/ country and other stuff that might be okay for sorting / searching
            // TODO: make it the right way with relationships

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
        Schema::dropIfExists('series');
    }
}
