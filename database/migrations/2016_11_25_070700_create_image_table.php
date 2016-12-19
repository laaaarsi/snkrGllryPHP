<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('color');
            $table->string('style');
            $table->string('material');
            $table->string('shape');
            $table->integer('year');
            $table->string('desc');
            $table->string('path');
            //ForeignKey auf User Table
            $table->integer('userId');
            $table->rememberToken();
            $table->timestamps();
           // $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
