@extends('layouts.default')


@section('content')

    <section class="contestBox">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-xs-12">

                    <h2>Colorful like a rainbow</h2>

                    <figure>
                        <img class="img-responsive center-block" src="../img/IMG_5087.JPG">

                    </figure>
                </div>


                <div class="col-lg-6 col-md-6 col-xs-12 contestVerticalBox">
                    <article>

                        <h3>Join our Competition!</h3>


                        <p>
                            You only need to upload your best photo and you can be the lucky winner.
                        </p>
                        <p>
                            In our current photo competition, we are looking for recordings that are colorful, lively and
                            diverse.
                        </p>
                        <p>
                            You do not have to be the best. Only better than the others.
                            Compete your skills with other photgraphers and convince the Jury with your best pictures.
                        </p>


                    </article>
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

                        @endif

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

            <div class="row rowBox">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5059.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5087.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5109.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5059.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5087.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5109.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5059.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5087.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5109.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5059.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5087.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb picBox">
                    <a href="/viewPicByClick">
                        <img class="img-responsive" src="../img/IMG_5109.jpg" alt="">
                    </a>
                    <div class="likeAndCommentBox">
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                        <a href="/viewPicByClick">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <p>123 Likes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection