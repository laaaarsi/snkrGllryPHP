@extends('layouts.default')

@section('content')

<section class="loginSectionBox">

        <div class="container">
            <div class="row">
                <div class="loginBox">
                    <form>


                        <h2>Login</h2>
                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="loginUsername">Username</label>
                            <input type="text" class="form-control" id="loginUsername" placeholder="Enter Username">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                        </div>
                        <div class=" col-xs-12 loginButtonBox">
                            <a href="/" class="btn " role="button">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="registerBox">


                    <form method="POST" action="/login">
                        {!! csrf_field() !!}
                        <h2>Register a new Account</h2>
                        <div class="form-group col-lg-4 col-md-12 col-xs-12">
                            <label for="registerUsername">Username</label>
                            <input type="text" class="form-control" name="username" id="registerUsername"
                                   placeholder="Enter Username">
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-xs-12">
                            <label for="registerEmail">Email address</label>
                            <input type="email" class="form-control" name="email" id="registerEmail"
                                   placeholder="Enter email">
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-xs-12">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="registerPassword"
                                   placeholder="Password">
                        </div>

                        <div class="col-lg-2 col-xs-12 loginButtonBox">
                            <input type="submit" class="btn" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>


@endsection