<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers;
use App\Http;


class UsersController extends Controller
{
    public function index()
    {
        //Hier werden zunächst alle User gespeichert
        $users = User::all();
        //Hier werden die in der Variable users gespeicherten User an die view Test übergeben
        return view('test', compact('users'));

    }


    public function show($id)
    {

        //web.php route
        $user = User::find($id);
        return view('show', compact('user'));

    }


}
