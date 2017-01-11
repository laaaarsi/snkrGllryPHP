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



    public function store(Request $request)    {
        Image::create(Request::all());

        $images = Image::all();

        return view('index', compact('images'));

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function imageUpload(Request $request)    {





        $picture = $request->path;


        $this->validate($request, [
            'path' => 'dimensions:max_width=29000,max_height=29000'
        ]);

        $nameZumSpeichern = $picture->getClientOriginalName();

        $picture->move(public_path('/img'), $nameZumSpeichern);

        $bild = new Image;
        $bild->user_id = $request->user_id;
        $bild->brand = $request->brand;
        $bild->color = $request->color;
        $bild->style = $request->style;
        $bild->material= $request->material;
        $bild->shape= $request->shape;
        $bild->year= $request->year;
        $bild->desc= $request->desc;
        $bild->path= 'img/'.$nameZumSpeichern;

        $bild->save();

        return back();






    }


    public function sortAsc(){

        $images= Image::all()->sortBy('created_at');

        return view('index', compact('images'));

    }



    public function sortDesc(){

        $images= Image::all()->sortByDesc('created_at');

        return view('index', compact('images'));

    }





}
