<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/post/{id}', 'PostController@getPost');

Route::post('/', 'PostController@addPost');

Route::get('/registration', function(){ return View::make('registration'); });
Route::get('/logout', function(){ Auth::logout(); return Redirect::to('/'); });
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
