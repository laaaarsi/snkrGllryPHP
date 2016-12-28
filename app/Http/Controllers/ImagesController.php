<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Controllers;

class ImagesController extends Controller
{

    public function index(){

        $images = Image::all();

    }


    public function upload(){

        return view('test');

    }

    public function store(Request $request)
    {
        $image = new Image();
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ]);
        $image->title = $request->title;
        $image->description = $request->description;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$file->getClientOriginalName();

            $image->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $image->save();
        return $this->create()->with('success', 'Image Uploaded Successfully');
    }

    public function show(Request $request)
    {
        $images = Image::all();
        return view('image.showLists', compact('images'));

    }
}
