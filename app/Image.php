<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{



    /*An image is owned by an user*/

    public function user(){

                return $this->belongsTo('App\User');
        }


        protected $table = 'images';

    protected $fillable =[

        //brand, color, style, material, shape, year, desc, path
        desc, path

    ];







}
