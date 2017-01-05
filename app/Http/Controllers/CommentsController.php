<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Image;

class CommentsController extends Controller
{
    public function store(Request $request, Image $image){


        $comment = new Comment;
        $comment->comment = $request->comment;

        $image->comments()->save($comment);

        return back();

    }
}
