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
Auth::routes();

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

	//Usuarios
	Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios');
	Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');
	Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store')->name('usuarios.store');

	Route::get('/usuarios/{id}/edit','App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
	Route::put('/usuarios/{id}','App\Http\Controllers\UsuariosController@update')->name('usuarios.update');
	Route::delete('/usuarios/{id}','App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');
});

