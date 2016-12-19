<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            //$table->string('registered');
            $table->string('location');
            //www.instagram.com/insertUsernameHere
            $table->string('instagram')->nullable();
            //Likes werden über Query abgefragt
            //Pictures werden ebenfalls über Query abgefragt
            //Profilbild muss ebenfalls hochgeladen werden es sollte aber auch ein Default Bild geben
            $table->string('about')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::drop('users');
    }
}
