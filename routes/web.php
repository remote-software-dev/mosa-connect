<?php

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes(['verify' => true]);

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', [
    'as'=>'/profile',
    'uses'=>'ProfileController@index'
]);

Route::get('/profile-create', [
    'as'=>'/profile-create',
    'uses'=>'ProfileController@create' //https://laravel.com/docs/5.7/middleware
]);

Route::get('/profile-edit', [
    'as'=>'/profile-edit',
    'uses'=>'ProfileController@edit'
]);

Route::post('/profile-store', [
    'as'=>'/profile-store',
    'uses'=>'ProfileController@store'
]);

Route::post('/profile-update', [
    'as'=>'/profile-update',
    'uses'=>'ProfileController@update'
]);

Route::get('/profile-follower', [
    'as'=>'/profile-follower',
    'uses'=>'ProfileController@seeFollower'
]);

Route::get('/profile-following', [
    'as'=>'/profile-follwiong',
    'uses'=>'ProfileController@seeFollowing'
]);

Route::get('/komunitas', [
    'as'=>'/komunitas',
    'uses'=>'CommunityController@index'
]);