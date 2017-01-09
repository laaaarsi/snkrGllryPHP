@extends('layouts.default')

@section('content')




    <section class="PicByClickBox">
        <div class="container">
            <div class="row">


                <div class="row-centered col-xs-12 col-sm-6">


                        <img class="img-responsive center-block" src="../{{$image->path}}" height="300">

                    <div class="likeAndCommentBox">

                        @if (Auth::guest())
                            <p>Please <a href={{url('/login')}}>Login</a> or <a href={{url('/register')}}>Register</a> to like this picture</p>
                        @else
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        @endif

                        <p>123 Likes</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">

                    <label for="username">Username: </label>
                    <span id="username"><a href="/user/{{$image->user->id}}">{{$image->user->username}}</a></span><br>
                    <label for="brand">Brand: </label>
                    <span id="brand">{{$image->brand}}</span><br>
                    <label for="name">Name: </label>
                    <span id="name">Ronnie Fieg Cove</span><br>
                    <label for="model">Model: </label>
                    <span id="model">Gel Lyte V</span><br>
                    <label for="year">Year: </label>
                    <span id="year">{{$image->year}}</span><br>
                    <label for="color">Color: </label>
                    <span id="color">{{$image->color}}</span><br>
                    <label for="description">Description: </label>
                    <span id="description">{{$image->desc}}</span><br>
                    <label for="comment">Comments: </label>
                    <span id="comment">
                         <ul>
                            @foreach($image->comments as $comment)
                                <!--Es muss ein Link auf Username werden!-->
                                    <li><a href="/user/{{$comment->user->id}}">{{$comment->user->username}}</a>: {{$comment->comment}}</li>
                                @endforeach
                        </ul>
                    </span>

                </div>

                <!--Es kann nur kommentiert werden wenn der User eingeloggt ist-->


                @if (Auth::guest())

                    <div class="col-xs-12 col-sm-6">
                        <p>Please <a href={{url('/login')}}>Login</a> or <a href={{url('/register')}}>Register</a> to write a comment</p>
                    </div>


                @else
                    <div class="col-xs-12 col-sm-6">
                        <form method="post" action="/picture/{{$image->id}}/comments">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>


                            <input type="hidden" name="image_id" value="{{$image->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <input type="submit" class="btn" value="Send">
                            </div>
                        </form>
                    </div>

                @endif


            </div>
        </div>
    </section>



@endsection