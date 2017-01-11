<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Image;

class CommentsController extends Controller
{
    public function store(Request $request)    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->image_id = $request->image_id;
        //$id->comments()->save($comment);
        $comment->save();
        return back();



    }

    public function store2(Request $request)
    {


        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->image_id = $request->image_id;
        $comment->save();

         /*$response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            'commentObj' => $comment,

        );*/
//        return Response::json($response);
        return response()->json($comment);
    }






}
