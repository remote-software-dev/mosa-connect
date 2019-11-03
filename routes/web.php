<?php

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', [
    'as'=>'/profile',
    'uses'=>'ProfileController@index'
]);

