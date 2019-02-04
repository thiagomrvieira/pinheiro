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

//Perguntas
Route::get('/perguntas', 'controladorPerguntas@index');
Route::get('/perguntas/novo', 'controladorPerguntas@create');
Route::post('/perguntas', 'controladorPerguntas@store');
Route::get('/perguntas/apagar/{id}', 'controladorPerguntas@destroy');
Route::get('/perguntas/editar/{id}', 'controladorPerguntas@edit');
Route::post('/perguntas/{id}', 'controladorPerguntas@update');

//Telefones
Route::get('/telefones', 'controladorTelefones@index');
Route::get('/telefones/novo', 'controladorTelefones@create');
Route::post('/telefones', 'controladorTelefones@store');
Route::get('/telefones/apagar/{id}', 'controladorTelefones@destroy');
Route::get('/telefones/editar/{id}', 'controladorTelefones@edit');
Route::post('/telefones/{id}', 'controladorTelefones@update');