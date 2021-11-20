<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => ['role:Administrador']], function () {
	
	//Usuarios
	Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios');
	Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');
	Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store')->name('usuarios.store');

	Route::get('/usuarios/{id}/edit','App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
	Route::put('/usuarios/{id}','App\Http\Controllers\UsuariosController@update')->name('usuarios.update');
	Route::delete('/usuarios/{id}','App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');

	//Profesores
	Route::get('/profesores', 'App\Http\Controllers\profesoresController@index')->name('profesores');
	Route::get('/profesores/create', 'App\Http\Controllers\profesoresController@create')->name('profesores.create');
	Route::post('/profesores', 'App\Http\Controllers\profesoresController@store')->name('profesores.store');

	Route::get('/profesores/{id}', 'App\Http\Controllers\profesoresController@show')->name('profesores.show');
	Route::delete('/profesores/{id}','App\Http\Controllers\profesoresController@destroy')->name('profesores.destroy');

	//Estudiantes
	Route::get('/estudiantes', 'App\Http\Controllers\estudiantesController@index')->name('estudiantes');
	Route::get('/estudiantes/create', 'App\Http\Controllers\estudiantesController@create')->name('estudiantes.create');
	Route::post('/estudiantes', 'App\Http\Controllers\estudiantesController@store')->name('estudiantes.store');

	Route::get('/estudiantes/{id}/edit','App\Http\Controllers\estudiantesController@edit')->name('estudiantes.edit');
	Route::put('/estudiantes/{id}','App\Http\Controllers\estudiantesController@update')->name('estudiantes.update');
	Route::delete('/estudiantes/{id}','App\Http\Controllers\estudiantesController@destroy')->name('estudiantes.destroy');

	//Paises
	Route::get('/paises', 'App\Http\Controllers\paisController@index')->name('paises');
	Route::get('/paises/create', 'App\Http\Controllers\paisController@create')->name('paises.create');
	Route::post('/paises', 'App\Http\Controllers\paisController@store')->name('paises.store');
	Route::get('/paises/{id}/edit','App\Http\Controllers\paisController@edit')->name('paises.edit');
	Route::put('/paises/{id}','App\Http\Controllers\paisController@update')->name('paises.update');
	Route::delete('/paises/{id}','App\Http\Controllers\paisController@destroy')->name('paises.destroy');

	//Profesiones
	Route::get('/profesiones', 'App\Http\Controllers\profesionesController@index')->name('profesiones');
	Route::get('/profesiones/create', 'App\Http\Controllers\profesionesController@create')->name('profesiones.create');
	Route::post('/profesiones', 'App\Http\Controllers\profesionesController@store')->name('profesiones.store');
	Route::get('/profesiones/{id}/edit','App\Http\Controllers\profesionesController@edit')->name('profesiones.edit');
	Route::put('/profesiones/{id}','App\Http\Controllers\profesionesController@update')->name('profesiones.update');
	Route::delete('/profesiones/{id}','App\Http\Controllers\profesionesController@destroy')->name('profesiones.destroy');

	//Asesorias
	Route::get('/asesorias', 'App\Http\Controllers\asesoriasController@index')->name('asesorias');
	Route::get('/asesorias/create', 'App\Http\Controllers\asesoriasController@create')->name('asesorias.create');
	Route::post('/asesorias', 'App\Http\Controllers\asesoriasController@store')->name('asesorias.store');
	Route::get('/asesorias/{id}', 'App\Http\Controllers\asesoriasController@show')->name('asesorias.show');
	Route::delete('/asesorias/{id}','App\Http\Controllers\asesoriasController@destroy')->name('asesorias.destroy');

});

Route::group(['middleware' => ['role:Profesor']], function () {
	
	//Profesor
	Route::get('/profesor', 'App\Http\Controllers\profesorController@index')->name('profesor');
	Route::get('/profesor/{id}/edit','App\Http\Controllers\profesorController@edit')->name('profesor.edit');
	Route::put('/profesor/{id}','App\Http\Controllers\profesorController@update')->name('profesor.update');

	//Asesoria
	Route::get('/asesoria', 'App\Http\Controllers\asesoriaController@index')->name('asesoria');
	Route::get('/asesoria/{id}/edit','App\Http\Controllers\asesoriaController@edit')->name('asesoria.edit');
	Route::put('/asesoria/{id}','App\Http\Controllers\asesoriaController@update')->name('asesoria.update');

	//Asesoria Estudiante
	Route::get('/AsesoriaEstudiante', 'App\Http\Controllers\AsesoriaEstudianteController@index')->name('AsesoriaEstudiante');
	Route::get('/AsesoriaEstudiante/create', 'App\Http\Controllers\AsesoriaEstudianteController@create')->name('AsesoriaEstudiante.create');
	Route::post('/AsesoriaEstudiante', 'App\Http\Controllers\AsesoriaEstudianteController@store')->name('AsesoriaEstudiante.store');
	Route::get('/AsesoriaEstudiante/{id}/edit','App\Http\Controllers\AsesoriaEstudianteController@edit')->name('AsesoriaEstudiante.edit');
	Route::put('/AsesoriaEstudiante/{id}','App\Http\Controllers\AsesoriaEstudianteController@update')->name('AsesoriaEstudiante.update');
	Route::delete('/AsesoriaEstudiante/{id}','App\Http\Controllers\AsesoriaEstudianteController@destroy')->name('AsesoriaEstudiante.destroy');



	});

Route::group(['middleware' => ['role:Usuario']], function () {
	
	//Profesor
	Route::get('/ProfesoresDisponibles', 'App\Http\Controllers\ProfesoresDisponiblesController@index')->name('ProfesoresDisponibles');
	Route::get('/ProfesoresDisponibles/create', 'App\Http\Controllers\ProfesoresDisponiblesController@create')->name('ProfesoresDisponibles.create');
	Route::post('/ProfesoresDisponibles', 'App\Http\Controllers\ProfesoresDisponiblesController@store')->name('ProfesoresDisponibles.store');
	Route::get('/ProfesoresDisponibles/{id}/edit','App\Http\Controllers\ProfesoresDisponiblesController@edit')->name('ProfesoresDisponibles.edit');
	Route::put('/ProfesoresDisponibles/{id}','App\Http\Controllers\ProfesoresDisponiblesController@update')->name('ProfesoresDisponibles.update');


	//Asesorias
	Route::get('/UsuarioAsesorias', 'App\Http\Controllers\asesoriaController@UsuarioAsesorias')->name('UsuarioAsesorias');

});
Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});