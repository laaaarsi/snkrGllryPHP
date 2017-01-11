<?php

Route::get('/', 'ImagesController@index');
Route::get('/asc', 'ImagesController@sortAsc');
Route::get('/desc', 'ImagesController@sortDesc');

//Route::post('store', 'ImagesController@store');
Route::post('imageUpload', 'ImagesController@imageUpload');



Route::get('picture/{id}','ImagesController@show' );
//Route::post('picture/{id}/comments','CommentsController@store' );
Route::post('addComment','CommentsController@store2' );




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


//UserControllerTest

Route::get('user/{id}','UsersController@show');


Route::get('/login',['uses'=>'UsersController@index']);
Route::get('/login/create',['uses'=>'UsersController@create']);
Route::post('/login',['uses'=>'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');







