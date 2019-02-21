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
Route::get('/perguntas', 'controladorPerguntas@index')->middleware('auth');
Route::get('/perguntas/novo', 'controladorPerguntas@create')->middleware('auth');
Route::post('/perguntas', 'controladorPerguntas@store')->middleware('auth');
Route::get('/perguntas/apagar/{id}', 'controladorPerguntas@destroy')->middleware('auth');
Route::get('/perguntas/editar/{id}', 'controladorPerguntas@edit')->middleware('auth');
Route::post('/perguntas/{id}', 'controladorPerguntas@update')->middleware('auth');

//TELEFONES
Route::get('/telefones', 'controladorTelefones@index')->middleware('auth');
Route::get('/telefones/novo', 'controladorTelefones@create')->middleware('auth');
Route::post('/telefones', 'controladorTelefones@store')->middleware('auth');
Route::get('/telefones/apagar/{id}', 'controladorTelefones@destroy')->middleware('auth');
Route::get('/telefones/editar/{id}', 'controladorTelefones@edit')->middleware('auth');
Route::post('/telefones/{id}', 'controladorTelefones@update')->middleware('auth');

//NOTÍCIAS
Route::get('/noticias', 'controladorNoticias@index')->middleware('auth');
Route::get('/noticias/novo', 'controladorNoticias@create')->middleware('auth');
Route::get('/noticias/{id}', 'controladorNoticias@show')->middleware('auth');
Route::post('/noticias', 'controladorNoticias@store')->middleware('auth');
Route::get('/noticias/apagar/{id}', 'controladorNoticias@destroy')->middleware('auth');
Route::get('noticias/editar/{id}', 'controladorNoticias@edit')->middleware('auth');
Route::post('/noticias/{id}', 'controladorNoticias@update')->middleware('auth');

//AREA AFETADA
Route::get('/areas', 'controladorArea@index')->middleware('auth');
Route::get('/areas/novo', 'controladorArea@create')->middleware('auth');
Route::post('/areas', 'controladorArea@store')->middleware('auth');
Route::get('/areas/apagar/{id}', 'controladorArea@destroy')->middleware('auth');
Route::get('areas/editar/{id}', 'controladorArea@edit')->middleware('auth');
Route::post('/areas/{id}', 'controladorArea@update')->middleware('auth');

//BANNER DOWNLOAD
Route::get('/download', 'controladorDownload@index')->middleware('auth');
Route::get('/download/novo', 'controladorDownload@create')->middleware('auth');
Route::post('/download', 'controladorDownload@store')->middleware('auth');
Route::get('/download/apagar/{id}', 'controladorDownload@destroy')->middleware('auth');
Route::get('download/editar/{id}', 'controladorDownload@edit')->middleware('auth');
Route::post('/download/{id}', 'controladorDownload@update')->middleware('auth');

//BANNER TOPO
Route::get('/banners', 'controladorBanner@index');
Route::get('/banners/novo', 'controladorBanner@create');
Route::post('/banners', 'controladorBanner@store');
Route::get('/banners/apagar/{id}', 'controladorBanner@destroy');
Route::get('banners/editar/{id}', 'controladorBanner@edit');
Route::post('/banners/{id}', 'controladorBanner@update');

//MAPA
Route::get('/mapa', 'controladorMapa@index');
Route::get('/mapa/novo', 'controladorMapa@create');
Route::post('/mapa', 'controladorMapa@store');
Route::get('/mapa/apagar/{id}', 'controladorMapa@destroy');
Route::get('mapa/editar/{id}', 'controladorMapa@edit');
Route::post('/mapa/{id}', 'controladorMapa@update');

//INFORMAÇÕES
Route::get('/info', 'controladorInfo@index');
Route::get('/info/novo', 'controladorInfo@create');
Route::post('/info', 'controladorInfo@store');
Route::get('/info/apagar/{id}', 'controladorInfo@destroy');
Route::get('info/editar/{id}', 'controladorInfo@edit');
Route::post('/info/{id}', 'controladorInfo@update');

//ÓRGAOS
Route::get('/orgaos', 'controladorOrgaos@index');
Route::get('/orgaos/novo', 'controladorOrgaos@create');
Route::post('/orgaos', 'controladorOrgaos@store');
Route::get('/orgaos/apagar/{id}', 'controladorOrgaos@destroy');
Route::get('orgaos/editar/{id}', 'controladorOrgaos@edit');
Route::post('/orgaos/{id}', 'controladorOrgaos@update');


//SUMMERNOTE
Route::get('summernote',array('as'=>'summernote.get','uses'=>'FileController@getSummernote'));
Route::post('summernote',array('as'=>'summernote.post','uses'=>'FileController@postSummernote'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
