<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('contact_type_id');
            $table->unsignedSmallInteger('world_id');
            $table->unsignedSmallInteger('location_id');
            $table->unsignedSmallInteger('size_id');
            $table->unsignedSmallInteger('sex_id');
            $table->string('name');
            $table->string('email');
            $table->string('url');
            $table->timestamps();
            $table->foreign('contact_type_id')->references('id')->on('contact_types');
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('sex_id')->references('id')->on('sex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
