<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('world_id');
            $table->unsignedSmallInteger('size_id');
            $table->unsignedSmallInteger('public_status_id');
            $table->string('name');
            $table->string('access');
            $table->timestamps();
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('size_id')->references('id')->on('sizes');
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
        Schema::dropIfExists('works');
    }
}
