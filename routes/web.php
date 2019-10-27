<?php

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToGoogleProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleGoogleProviderCallback')->name('login.callback');
Route::get('/home', 'HomeController@index')->name('home');


