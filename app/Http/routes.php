<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	
	
	Route::get ('/', 'DashboardController@index');
	Route::get ('/home', 'DashboardController@index');
	Route::get ('/cambiar_contrasena', 'DashboardController@showChangePasswordForm');
	Route::put ('/cambiar_contrasena', 'DashboardController@changePassword');
	Route::get ('/login', 'Auth\AuthController@showLoginForm');
	Route::post('/login', 'Auth\AuthController@login');
	Route::get ('/logout', 'Auth\AuthController@logout');
	
	
	Route::controllers([
			'inconsistencias'	=> 'InconsistenciasController',
			'penalizaciones'	=> 'PenalizacionesController',
			'qflows'			=> 'QflowsController',
			'usuarios'			=> 'UsuariosController',
			'nodos'				=> 'NodosSaturadosController',
			'reclamos'			=> 'ReclamosTecnicaController',
			'llamadas'			=> 'LlamadasController',
	]);
});