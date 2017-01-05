<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{



    /*An image is owned by an user*/

    public function user(){

                return $this->belongsTo('App\User');
        }

    /*An image is owned by an user*/

    public function likes(){

        return $this->hasMany('App\Like');
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    }


        protected $table = 'images';

  /*  protected $fillable =[

        //brand, color, style, material, shape, year, desc, path
        desc, path

    ];*/







}
