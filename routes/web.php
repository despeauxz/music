<?php

Route::get('/', 'HomeController@index');

// Signup
Route::get('/register', 'Auth\RegisterController@getSignedUp');
Route::post('/register', 'Auth\RegisterController@signup');

// Signin
Route::get('/login', 'Auth\LoginController@getLoggedIn')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@getLoggedOut');

Route::get('/activate/token/{token}', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend', 'Auth\ActivationController@resend')->name('auth.activate.resend');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/listen', 'Music\ListenController@index');

	Route::get('/profile', 'Music\ProfileController@index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
