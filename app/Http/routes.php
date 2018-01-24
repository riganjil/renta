<?php

use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'product'], function () {
    Route::get('/', 'ProductController@index');
    Route::get('/{id}', 'ProductController@detail');
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'AccountController@index');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/{id}', 'ProductController@list_category');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@aksi_login');
    Route::get('logout', 'AuthController@logout');

    Route::get('register', 'AuthController@register');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});
