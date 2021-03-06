@extends('layouts.default')

@section('content')

    <section class="profileBox">
        <div class="container">
            <div class="row">


                <div class="col-xs-12 titelbild">
                    <figure>
                        <a href="/viewPicByClick.html">
                            <img class="img-responsive" src="../img/titelbild.jpg">
                        </a>
                    </figure>
                </div>


                <div class="col-xs-12 col-sm-3">
                    <figure>
                        <img class="image-responsive" src="../img/profilPic.jpg" height="130" width="130"/>

                    </figure>
                </div>

                <div class="col-xs-12 col-sm-9">

                    <label for="username">Username: </label>
                    <span id="username">{{$user->username}}</span><br>

                    <label for="lastLogin">Registred since: </label>
                    <span id="lastLogin">{{$user->created_at}}</span><br>

                    <label for="location">Location: </label>
                    <span id="location">{{$user->location}}</span><br>

                    <label for="instagram">Instagram: </label>
                    <span id="instagram">{{$user->instagram}}</span><br>

                    <label for="likes">Total likes: </label>
                    <span id="likes">1000</span>

                </div>


                <article>
                    <div class="col-xs-12">
                        <h2>About me</h2>

                        {{$user->about}}

                    </div>
                </article>

                <div class="col-xs-12">
                    <h2>Shoes i own</h2>

                    <ul>

                    @foreach($user->images as $image)





                        <li><a href="/picture/{{$image->id}}">{{$image->year}} {{$image->brand}}</a></li>


                    @endforeach
                        </ul>


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
                                            <form>
                                                <div class="form-group">
                                                    <label for="brandSelect">Brand</label>
                                                    <select class="form-control" id="brandSelect">
                                                        <option>Nike</option>
                                                        <option>Adidas</option>
                                                        <option>Puma</option>
                                                        <option>Asics</option>
                                                        <option>Reebok</option>
                                                        <option>Saucony</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="colorSelect">Color</label>
                                                    <select class="form-control" id="colorSelect">
                                                        <option>Black</option>
                                                        <option>White</option>
                                                        <option>Red</option>
                                                        <option>Yellow</option>
                                                        <option>Orange</option>
                                                        <option>Brown</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="styleSelect">Style</label>
                                                    <select class="form-control" id="styleSelect">
                                                        <option>Running</option>
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
                                                    <label for="materialSelect">Material</label>
                                                    <select class="form-control" id="materialSelect">
                                                        <option>Suede</option>
                                                        <option>Mesh</option>
                                                        <option>Leather</option>
                                                        <option>Synthetic</option>
                                                        <option>Linen/Canvas</option>
                                                        <option>Knit</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="shapeSelect">Shape</label>
                                                    <select class="form-control" id="shapeSelect">
                                                        <option>low</option>
                                                        <option>mid</option>
                                                        <option>high</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="yearSelect">Year</label>
                                                    <select class="form-control" id="yearSelect">
                                                        <option>2016</option>
                                                        <option>2015</option>
                                                        <option>2014</option>
                                                        <option>2013</option>
                                                        <option>2012</option>
                                                        <option>2011</option>
                                                        <option>2010</option>


                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="descriptionTextarea">Description</label>
                                                    <textarea class="form-control" id="descriptionTextarea"
                                                              rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" class="form-control-file" id="exampleInputFile">
                                                </div>

                                                <button type="submit" class="btn">Submit</button>


                                                <button type="button" class="btn" data-dismiss="modal">Close
                                                </button>

                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#brand">Brand
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Asics</a></li>
                                <li><a href="#">Reebok</a></li>
                                <li><a href="#">Jordan</a></li>
                                <li><a href="#">Puma</a></li>
                                <li><a href="#">New Balance</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Model
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ultra Boost</a></li>
                                <li><a href="#">Reebok Classic x Solebox Club C85</a></li>
                                <li><a href="#">Nike Air Hyperadapt</a></li>
                                <li><a href="#">Adidas Gazelle</a></li>
                                <li><a href="#">Nike Free Flyknit</a></li>
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
                                <li><a href="#">Date ascending</a></li>
                                <li><a href="#">Date descending</a></li>
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
            <h2>My Pictures</h2>
            <div class="row rowBox">

                @foreach($user->images as $image)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                        <a href="/picture/{{$image->id}}">
                            <img class="img-responsive" src="../{{$image->path}}" alt="">
                        </a>
                        <div class="likeAndCommentBox">
                            <a href="/picture/">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                            </a>
                            <a href="/picture/">
                                <span class="glyphicon glyphicon-comment"></span>
                            </a>
                            <p>{{$image->created_at}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection