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
            //FK auf User durch Eloquent
            $table->integer('user_id')->unsigned();
            //Es gibt noch einen Namen für Schuhe sowie ein Modell
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->string('style')->nullable();
            $table->string('material')->nullable();
            $table->string('shape')->nullable();
            $table->integer('year')->nullable();
            $table->string('desc')->nullable();
            $table->string('path')->nullable();
            $table->rememberToken();
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
        Schema::drop('images');
    }
}
