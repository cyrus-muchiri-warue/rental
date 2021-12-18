<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomates', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('location');
            $table->string('category');
            $table->unsignedBigInteger('user_id');
            $table->text('description');
            $table->Integer('status')->default('1');
            $table->string('image');
            $table->Integer('price');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('roomates');
    }
}
