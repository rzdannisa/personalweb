<?php

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
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('article/add', 'AdminController@createarticle');
Route::post('article/save', 'AdminController@storearticle');
Route::get('article/all', 'AdminController@allarticle');
Route::get('article/edit/{id}', 'AdminController@editarticle');
Route::post('article/update/{id}', 'AdminController@updatearticle');
Route::get('article/delete/{id}', 'AdminController@deletearticle');

Route::post('comment/save', 'AdminController@storecomment');
Route::get('comment/all', 'AdminController@allcomment');
Route::get('comment/delete/{id}', 'AdminController@deletecomment');

Route::get('tags/add', 'AdminController@createtags');
Route::post('tags/save', 'AdminController@storetags');
Route::get('tags/all', 'AdminController@alltags');
Route::get('tags/edit/{id}', 'AdminController@edittags');
Route::post('tags/update/{id}', 'AdminController@updatetags');
Route::get('tags/delete/{id}', 'AdminController@deletetags');
