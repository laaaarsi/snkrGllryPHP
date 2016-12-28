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
            $table->integer('user_id')->unsigned();
            $table->string('brand')->nullable();;
            $table->string('color')->nullable();;
            $table->string('style')->nullable();;
            $table->string('material')->nullable();;
            $table->string('shape')->nullable();;
            $table->integer('year')->nullable();;
            $table->string('desc');
            $table->string('path');
            //ForeignKey auf User Table
            $table->integer('userId');
            $table->rememberToken();
            $table->timestamps();

            //Foreignkey auf Users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
