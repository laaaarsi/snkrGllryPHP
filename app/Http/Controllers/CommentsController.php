<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Image;

class CommentsController extends Controller
{
    public function store(Request $request, Image $id)    {



        $comment = new Comment;


        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->image_id = $request->image_id;

        $id->comments()->save($comment);



        return back();


    }






}
