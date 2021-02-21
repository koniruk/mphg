<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('world_id');
            $table->unsignedSmallInteger('public_status_id');
            $table->string('description');
            $table->dateTime('display_date');
            $table->timestamps();
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('public_status_id')->references('id')->on('public_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
