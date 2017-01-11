@extends('layouts.default')


@section('content')
    <section class="carouselBox">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive" src="../img/carousel1.jpg" alt="First slide">
                            </div>

                            <div class="item">
                                <img class="img-responsive src=" src="../img/carousel2.jpg" alt="Second slide">

                            </div>
                            <div class="item">
                                <img class="img-responsive" src="../img/carousel3.jpg" alt="Third slide">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#filterNavbar">
                        More Filter
                    </button>


                </div>
                <div class="collapse navbar-collapse" id="filterNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        @if (Auth::guest())

                        @else
                            <li><!-- Trigger the modal with a button -->


                                <a href="#" data-toggle="modal" data-target="#uploadModal">Upload</a>

                                <!-- Modal -->
                                <div id="uploadModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg modal-sm">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Upload</h4>
                                            </div>

                                            <div class="modal-body">

                                                <form enctype="multipart/form-data" action="imageUpload" method="post">

                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="brand">Brand</label>
                                                        <select class="form-control" id="brand" name="brand">
                                                            <option value="Nike">Nike</option>
                                                            <option>Adidas</option>
                                                            <option>Puma</option>
                                                            <option>Asics</option>
                                                            <option>Reebok</option>
                                                            <option>Saucony</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="color">Color</label>
                                                        <select class="form-control" id="color" name="color">
                                                            <option value="Black">Black</option>
                                                            <option>White</option>
                                                            <option>Red</option>
                                                            <option>Yellow</option>
                                                            <option>Orange</option>
                                                            <option>Brown</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="style">Style</label>
                                                        <select class="form-control" id="style" name="style">
                                                            <option value="Running">Running</option>
                                                            <option>Basketball</option>
                                                            <option>Tennis</option>
                                                            <option>Retro</option>
                                                            <option>Collap</option>
                                                            <option>Vintage</option>
                                                            <option>Skateboarding</option>
                                                            <option>Fairtrade</option>
                                                            <option>Vegan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="material">Material</label>
                                                        <select class="form-control" id="material" name="material">
                                                            <option value="Suede">Suede</option>
                                                            <option>Mesh</option>
                                                            <option>Leather</option>
                                                            <option>Synthetic</option>
                                                            <option>Linen/Canvas</option>
                                                            <option>Knit</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shape">Shape</label>
                                                        <select class="form-control" id="shape" name="shape">
                                                            <option value="low">low</option>
                                                            <option>mid</option>
                                                            <option>high</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="year">Year</label>
                                                        <select class="form-control" id="year" name="year">
                                                            <option value="2016">2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>


                                                        </select>
                                                    </div>




                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">




                                                <div class="form-group">
                                                        <label for="desc">Description</label>
                                                        <textarea class="form-control" id="desc" name="desc"
                                                                  rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="path">File input</label>
                                                        <input type="file" class="form-control-file" id="path" name="path">
                                                    </div>

                                                    <input type="submit" class="btn" value="Upload">


                                                    <button type="button" class="btn" data-dismiss="modal">Close
                                                    </button>

                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        @endif






                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#brand">Brand
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        @foreach($images as $brand)
                                            <li><a href="#">{{$brand->brand}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>






                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="showBrands">Model
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($images as $brand)


                                    <li><a href="#">{{$brand->brand}}</a></li>
                                @endforeach
                                    <li><a href="#">Muss noch distinct werden und ein Klick auf die jeweilige Marke muss eine Filterung auslösen</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Year</a></li>
                                <li><a href="#">Styles</a></li>
                                <li><a href="#">Materials</a></li>
                                <li><a href="#">Shape</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Order by
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/asc">Date ascending</a></li>
                                <li><a href="/desc">Date descending</a></li>
                                <li><a href="#">Likes ascending</a></li>
                                <li><a href="#">Likes descending</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">

            <div class="row rowBox">

                <div class="row rowBox">

                    @foreach($images as $image)


                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                            <a href="/picture/{{$image->id}}">
                                <img class="img-responsive" src="../{{$image->path}}" alt="{{$image->path}}" height="200" width="200">
                            </a>
                            <div class="likeAndCommentBox">
                                <a href="/picture/{{$image->id}}">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </a>
                                <a href="/picture/{{$image->id}}">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </a>
                                <p>{{$image->user->id}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

@endsection