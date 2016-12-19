<?php

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/contest', function () {
    return view('contest');
});


Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/news', function () {
    return view('news');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/viewPicByClick', function () {
    return view('viewPicByClick');
});



Route::get('/login',['uses'=>'UsersController@index']);
Route::get('/login/create',['uses'=>'UsersController@create']);
Route::post('/login',['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
