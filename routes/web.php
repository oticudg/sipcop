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
	/* ruta index*/
	Route::get('/', 'HomeController@index');
	Route::get('dashboard', 'HomeController@dashboard');
	Route::post('empleado/search', 'EmpleadoController@searchEmpleado');
	Route::resource('expedientes', 'ExpedienteController');
	Auth::routes();	

	Route::resource('users', 'UsersController');
	/*
	Route::get('users', function () {
		return view('users.user_log');
	});*/
	
	route::get('prueba', function(){
		Auth::user()->syncRoles([2]);
	});	
