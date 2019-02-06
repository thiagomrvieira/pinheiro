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

//PERGUNTAS
Route::get('/perguntas', 'controladorPerguntas@index');
Route::get('/perguntas/novo', 'controladorPerguntas@create');
Route::post('/perguntas', 'controladorPerguntas@store');
Route::get('/perguntas/apagar/{id}', 'controladorPerguntas@destroy');
Route::get('/perguntas/editar/{id}', 'controladorPerguntas@edit');
Route::post('/perguntas/{id}', 'controladorPerguntas@update');

//TELEFONES
Route::get('/telefones', 'controladorTelefones@index');
Route::get('/telefones/novo', 'controladorTelefones@create');
Route::post('/telefones', 'controladorTelefones@store');
Route::get('/telefones/apagar/{id}', 'controladorTelefones@destroy');
Route::get('/telefones/editar/{id}', 'controladorTelefones@edit');
Route::post('/telefones/{id}', 'controladorTelefones@update');

//NOTÍCIAS
Route::get('/noticias', 'controladorNoticias@index');
Route::get('/noticias/novo', 'controladorNoticias@create');
Route::post('/noticias', 'controladorNoticias@store');
Route::get('/noticias/apagar/{id}', 'controladorNoticias@destroy');
Route::get('noticias/editar/{id}', 'controladorNoticias@edit');
Route::post('/noticias/{id}', 'controladorNoticias@update');

//AREA AFETADA
Route::get('/area', 'controladorArea@index');
Route::get('/area/novo', 'controladorArea@create');
Route::post('/area', 'controladorArea@store');


//SUMMERNOTE
Route::get('summernote',array('as'=>'summernote.get','uses'=>'FileController@getSummernote'));
Route::post('summernote',array('as'=>'summernote.post','uses'=>'FileController@postSummernote'));