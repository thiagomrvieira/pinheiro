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
Route::get('/duvidas-frequentes', 'controladorPerguntas@index')->middleware('auth');
Route::get('/duvidas-frequentes/novo', 'controladorPerguntas@create')->middleware('auth');
Route::post('/duvidas-frequentes', 'controladorPerguntas@store')->middleware('auth');
Route::get('/duvidas-frequentes/apagar/{id}', 'controladorPerguntas@destroy')->middleware('auth');
Route::get('/duvidas-frequentes/editar/{id}', 'controladorPerguntas@edit')->middleware('auth');
Route::post('/duvidas-frequentes/{id}', 'controladorPerguntas@update')->middleware('auth');

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
Route::get('/banners', 'controladorBanner@index')->middleware('auth');
Route::get('/banners/novo', 'controladorBanner@create')->middleware('auth');
Route::post('/banners', 'controladorBanner@store')->middleware('auth');
Route::get('/banners/apagar/{id}', 'controladorBanner@destroy')->middleware('auth');
Route::get('banners/editar/{id}', 'controladorBanner@edit')->middleware('auth');
Route::post('/banners/{id}', 'controladorBanner@update')->middleware('auth');

//MAPA
Route::get('/mapa', 'controladorMapa@index')->middleware('auth');
Route::get('/mapa/novo', 'controladorMapa@create')->middleware('auth');
Route::post('/mapa', 'controladorMapa@store')->middleware('auth');
Route::get('/mapa/apagar/{id}', 'controladorMapa@destroy')->middleware('auth');
Route::get('mapa/editar/{id}', 'controladorMapa@edit')->middleware('auth');
Route::post('/mapa/{id}', 'controladorMapa@update')->middleware('auth');

//ATUAÇÃO INTEGRADA
Route::get('/atuacao-integrada', 'controladorInfo@index')->middleware('auth');
Route::get('/atuacao-integrada/novo', 'controladorInfo@create')->middleware('auth');
Route::post('/atuacao-integrada', 'controladorInfo@store')->middleware('auth');
Route::get('/atuacao-integrada/apagar/{id}', 'controladorInfo@destroy')->middleware('auth');
Route::get('/atuacao-integrada/editar/{id}', 'controladorInfo@edit')->middleware('auth');
Route::post('/atuacao-integrada/{id}', 'controladorInfo@update')->middleware('auth');

//ÓRGAOS
Route::get('/orgaos', 'controladorOrgaos@index')->middleware('auth');
Route::get('/orgaos/novo', 'controladorOrgaos@create')->middleware('auth');
Route::post('/orgaos', 'controladorOrgaos@store')->middleware('auth');
Route::get('/orgaos/apagar/{id}', 'controladorOrgaos@destroy')->middleware('auth');
Route::get('orgaos/editar/{id}', 'controladorOrgaos@edit')->middleware('auth');
Route::post('/orgaos/{id}', 'controladorOrgaos@update')->middleware('auth');

//PLANO DE CONTINGÊNCIA
Route::get('/plano-contingencia', 'controladorPlano@index')->middleware('auth');
Route::get('/plano-contingencia/novo', 'controladorPlano@create')->middleware('auth');
Route::post('/plano-contingencia', 'controladorPlano@store')->middleware('auth');
Route::get('/plano-contingencia/apagar/{id}', 'controladorPlano@destroy')->middleware('auth');
Route::get('plano-contingencia/editar/{id}', 'controladorPlano@edit')->middleware('auth');
Route::post('/plano-contingencia/{id}', 'controladorPlano@update')->middleware('auth');

//TERMOS DE USO
Route::get('/termos', 'controladorTermos@index')->middleware('auth');
Route::get('/termos/novo', 'controladorTermos@create')->middleware('auth');
Route::post('/termos', 'controladorTermos@store')->middleware('auth');
Route::get('/termos/apagar/{id}', 'controladorTermos@destroy')->middleware('auth');
Route::get('/termos/editar/{id}', 'controladorTermos@edit')->middleware('auth');
Route::post('/termos/{id}', 'controladorTermos@update')->middleware('auth');


//SUMMERNOTE
Route::get('summernote',array('as'=>'summernote.get','uses'=>'FileController@getSummernote'));
Route::post('summernote',array('as'=>'summernote.post','uses'=>'FileController@postSummernote'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
