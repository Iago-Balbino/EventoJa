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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'IndexController@index')->name('index');
//Route::get('/inscrever/{id}', 'InscreverController@index')->name('inscrever');

Route::get('/dados-usuario', 'AtualizarController@buscar')->name('buscar');
Route::post('/atualizar', 'AtualizarController@atualizar')->name('atualizar');

Route::get('/inscrever/{id}', 'EventoController@inscrever')->name('inscrever');

Route::get('/meusEventos', 'EventoController@meusEventos')->name('meusEventos');

//Route::post('/inscrever/{id}', 'EventoController@inscrever')->name('inscrever');



