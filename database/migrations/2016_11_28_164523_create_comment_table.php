<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            //FK auf User
            $table->integer('userId');
            //FK auf Image
            $table->integer('imageId');
            $table->string('comment');
            $table->rememberToken();
            $table->timestamps();

            //$table->foreign('userId')->references('id')->on('images');
            //$table->foreign('imageId')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
