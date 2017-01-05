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
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>

                        <p>123 Likes</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">

                    <label for="username">Username: </label>
                    <span id="username">MaxMuster</span><br>
                    <label for="brand">Brand: </label>
                    <span id="brand">Asics</span><br>
                    <label for="name">Name: </label>
                    <span id="name">Ronnie Fieg Cove</span><br>
                    <label for="model">Model: </label>
                    <span id="model">Gel Lyte V</span><br>
                    <label for="year">Year: </label>
                    <span id="year">2013</span><br>
                    <label for="color">Color: </label>
                    <span id="color">Blue</span><br>
                    <label for="description">Description: </label>
                    <span id="description">Lorem ipsum</span>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <form method="POST" action="/viewPicByClick/{{ $image->id }}/comments">

                        <div class="form-group">
                            <label for="descriptionTextarea">Comment:</label>
                            <textarea class="form-control" id="descriptionTextarea" name="comment" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </section>






@endsection