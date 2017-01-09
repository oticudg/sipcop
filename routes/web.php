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
	Route::group(['namespace' => 'Auth'], function () {
		Route::post('login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout');
		Route::post('register','RegisterController@register');
	});

	Route::get('/', 'HomeController@index');

	Route::get('dashboard', 'HomeController@dashboard');

	Route::post('empleado/search', 'EmpleadoController@searchEmpleado');

	Route::resource('expedientes', 'ExpedienteController',['except' => [
		'edit'
	]]);

	
	Route::post('changePassword', 'UsersController@changePassword');	
	Route::resource('users', 'UsersController',['only' => [
		'index', 'update', 'destroy'
	]]);

	route::get('prueba', function(){
		Auth::user()->syncRoles([1]);
	});	
