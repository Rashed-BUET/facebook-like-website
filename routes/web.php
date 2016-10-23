<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@index')->name('home');

Route::get('/signup','AuthController@getsignup')->name('auth.signup')->middleware('guest');
Route::post('/signup','AuthController@postsignup')->middleware('guest');


Route::get('/signin','AuthController@getsignin')->name('auth.signin')->middleware('guest');
Route::post('/signin','AuthController@postsignin')->middleware('guest');

Route::get('/signout','AuthController@getsignout')->name('auth.signout');

Route::get('/search','SearchController@getResults')->name('search.results');


Route::get('/user/{username}','ProfileController@getProfile')->name('profile.index');

Route::get('/profile/edit','ProfileController@getEdit')->name('profile.edit')->middleware('auth');

Route::post('/profile/edit','ProfileController@postEdit')->middleware('auth');


Route::get('/friends','FriendController@getIndex')->name('friends.index')->middleware('auth');



