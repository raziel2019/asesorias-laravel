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
	Route::get('/profesores/{id}', 'App\Http\Controllers\profesoresController@show')->name('profesores.show');
	Route::delete('/profesores/{id}','App\Http\Controllers\profesoresController@destroy')->name('profesores.destroy');

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
	Route::get('/asesorias/{id}', 'App\Http\Controllers\asesoriasController@show')->name('asesorias.show');
	Route::delete('/asesorias/{id}','App\Http\Controllers\asesoriasController@destroy')->name('asesorias.destroy');

});