<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers;

class ImagesController extends Controller
{

    public function index(){

        $images = Image::all();
        return view('index', compact('images'));

    }


    public function show($id)    {

        //web.php route
        $image = Image::find($id);
        return view('picture', compact('image'));

    }


}
