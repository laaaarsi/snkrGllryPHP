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

    }


    public function show($id)
    {

        //web.php route
        $user = User::find($id);
        return view('profile', compact('user'));

    }


}
