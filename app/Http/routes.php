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

/*Route::get('/', 'WelcomeController@index');*/

Route::get('/', 'Auth\AuthController@getLogin');


Route::group(['prefix' => '', 'middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index');
	Route::resource("funcionarios","FuncionarioController");
	Route::resource("postos","PostoController"); 
	Route::resource("motivos","MotivoController");
	Route::resource("ocorrencias","OcorrenciaController"); 
	Route::get('auth/register', 'Auth\AuthController@getRegister');
 	Route::post('auth/register', 'Auth\AuthController@postRegister');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
