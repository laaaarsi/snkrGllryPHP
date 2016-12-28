<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers;
use App\Http;



class UsersController extends Controller
{
    public function index(){

        $users= User::all();

        return view('test')->with('users', $users);

    }



    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }



}
