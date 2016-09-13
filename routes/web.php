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
    return view('welcome', ['title' => 'Accueil']);
});


/**
 * Route groupe for user
 */
Route::group(['prefix' => 'account'], function() {
    Route::get('{nom}/{prenom}', 'AccountController@show')->middleware('auth');

    Route::post('register','AccountController@store')->middleware('guest');

    Route::get('register', function(){
    	return view('user.register', ['title' => 'inscription']);
    })->middleware('guest');

    Route::post('login','AccountController@login')->middleware('guest');

    Route::get('login', function(){
    	return view('user.login', ['title' => 'connexion']);
    })->middleware('guest');

    Route::get('logout', 'AccountController@deco')->middleware('auth');

    Route::put('edit/{id}','AccountController@edit')->middleware('auth');

    Route::delete('delete/{id}','AccountController@delete')->middleware('auth');
});

/**
 * Route groupe for admin
 */
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('user', 'AdminController@user');

    Route::get('user/edit/{slug}', 'AdminController@editUser');

    Route::put('user/edit/{slug}', 'AdminController@modUser');

    Route::get('user/delete/{slug}', 'AdminController@delete');
});

/**
 * Route groupe for faq
 */
Route::group(['prefix' => 'faq'], function() {
    Route::get('themes', 'faqController@show');

    Route::get('themes/{slug}', 'faqController@disc');

    Route::post('themes/comment', 'faqController@storeComment')->middleware('auth');

    Route::post('themes/theme', 'faqController@storeTheme')->middleware('auth');

    Route::get('add/themes', 'faqController@addtheme')->middleware('auth');
});

Route::get('conditions-generales', function(){
    return view('general', ['title' => 'Conditions générales d\'utilisation']);
});