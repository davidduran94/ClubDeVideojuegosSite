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

//User

Route::get('projects', 'GameUserController@showGames');

Route::get('about', 'GameUserController@about');

Route::get('index', 'GameUserController@principal');

//Admin



	Route::resource('game', 'GameController');
	Route::get('show', 'GameController@showAll');
	Route::resource('auth', 'AuthController');
	Route::get('home', 'HomeController@index');
	Route::get('/', 'AuthController@index');
	Route::get('logout', 'AuthController@logout');












