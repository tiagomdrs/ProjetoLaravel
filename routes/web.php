<?php

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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/sobre', 'ConteudoController@sobre')->name('sobre');
Route::get('/coleta_seletiva', 'ConteudoController@coleta')->name('coleta_seletiva');
Route::get('/lixeiras', 'ConteudoController@lixeiras')->name('lixeiras');
Route::get('/reciclagem', 'ConteudoController@reciclagem')->name('reciclagem');
Route::get('/desenvolvedores', 'ConteudoController@desenvolvedores')->name('desenvolvedores');

Auth::routes();

Route::resource('admin', 'AdminController',[ 
	'names' => [
		'index' => 'admin.home',
	]
]);

Route::resource('usuarios', 'UsuariosController',[ 
	'names' => [
		'index' => 'usuarios.home',
	]
]);

Route::resource('caminhoes', 'CaminhoesController');
Route::resource('motoristas', 'MotoristasController');
Route::resource('noticias', 'NoticiasController');
Route::resource('rotas', 'RotasController');
//Route::resource('usuarios', 'UsuariosController'); 