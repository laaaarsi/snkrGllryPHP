<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'location','instagram','about',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*A user can have many comments*/

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    /*A user can have many images*/

    public function images(){
        return $this->hasMany('App\Image');
    }

    /*A user can have many likes*/

    public function likes(){
        return $this->hasMany('App\Like');
    }






}
