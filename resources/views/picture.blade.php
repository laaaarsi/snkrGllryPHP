@extends('layouts.default')

@section('content')




    <section class="PicByClickBox">
        <div class="container">
            <div class="row">


                <div class="row-centered col-xs-12 col-sm-6">

                    <figure>
                        <img class="img-responsive center-block " src="../img/IMG_5109.jpg" height="750" width="500">
                    </figure>
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
                    <span id="username">{{$image->user->username}}</span><br>
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
                    <span id="description">{{$image->desc}}aaa</span><br>
                    <label for="comment">Comments: </label>
                    <span id="comment">
                         <ul>
                            @foreach($image->comments as $comment)
                                <!--Es muss ein Link auf Username werden!-->
                                    <li>{{$comment->user->username}}: {{$comment->comment}}</li>
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
                        <form method="POST" action="/picture/{{ $image->id }}/comments">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="commentField">Comment:</label>
                                <textarea class="form-control" id="commentField" name="comment" rows="3"></textarea>
                            </div>




                            <div class="form-group">
                                <button type="submit" class="btn">Send</button>
                            </div>
                        </form>
                    </div>

                @endif


            </div>
        </div>
    </section>



@endsection