<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/noticias/', 'controladorNoticias@noticias')->middleware('cors');
Route::get('v1/noticias/capa', 'controladorNoticias@capa')->middleware('cors');
Route::get('v1/noticias/{id}', 'controladorNoticias@noticia')->middleware('cors');

Route::get('v1/perguntas/', 'controladorPerguntas@perguntas')->middleware('cors');

Route::get('v1/telefones/', 'controladorTelefones@telefones')->middleware('cors');

Route::get('v1/areas/', 'controladorArea@areas')->middleware('cors');

Route::get('v1/banners/', 'controladorBanner@banners')->middleware('cors');

Route::get('v1/informacoes/', 'controladorInfo@informacoes')->middleware('cors');

