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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messenger', [
	'as' => 'messages', 
	'uses' => 'MessagesController@index',
]);
Route::get('/messenger/create', [
	'as' => 'messages.create', 
	'uses' => 'MessagesController@create',
]);
Route::post('/store', [
	'as' => 'messages.store', 
	'uses' => 'MessagesController@store',
]);
Route::get('{id}', [
	'as' => 'messages.show', 
	'uses' => 'MessagesController@show',
]);
Route::put('{id}', [
	'as' => 'messages.update', 
	'uses' => 'MessagesController@update'
]);
