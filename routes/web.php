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

/**
 * Route to home page
 */
Route::get('/', function () {
    return view('welcome')->with('title', 'Home');
});


/**
 * Route groupe for user
 */
Route::group(['prefix' => 'account'], function() {
    Route::get('{nom}/{prenom}', 'AccountController@show')->middleware('auth');

    Route::post('register','AccountController@store')->middleware('guest');

    Route::get('register', function(){
    	return view('user.register')->with('title', 'inscription');
    })->middleware('guest');

    Route::post('login','AccountController@login')->middleware('guest');

    Route::get('login', function(){
    	return view('user.login')->with('title', 'connexion');
    })->middleware('guest');

    Route::get('logout', 'AccountController@deco')->middleware('auth');

    Route::put('edit/{id}','AccountController@edit')->middleware('auth');

    Route::delete('delete/{id}','AccountController@delete')->middleware('auth');
});