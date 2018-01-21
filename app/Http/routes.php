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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('category/{id}', 'ProductController@list_category');

Route::group(['prefix' => 'product'], function (){

});

Route::group(['prefix' => 'auth'], function (){
   Route::get('login', 'AuthController@login');
   Route::post('login', 'AuthController@aksi_login');
   Route::get('logout', 'AuthController@logout');
});