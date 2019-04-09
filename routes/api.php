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

Route::get('v1/duvidas/', 'controladorPerguntas@perguntas')->middleware('cors');

Route::get('v1/telefones/', 'controladorTelefones@telefones')->middleware('cors');

Route::get('v1/mais-telefones/', 'controladorMaisTelefones@telefones')->middleware('cors');

Route::get('v1/areas/', 'controladorArea@areas')->middleware('cors');

Route::get('v1/banners/', 'controladorBanner@banners')->middleware('cors');

Route::get('v1/atuacao/', 'controladorInfo@informacoes')->middleware('cors');

Route::get('v1/plano/', 'controladorPlano@plano')->middleware('cors');

Route::get('v1/termos/', 'controladorTermos@termos')->middleware('cors');

Route::get('v1/mapa/', 'controladorMapa@mapa')->middleware('cors');

Route::get('v1/banners/prefeitura', 'controladorPrefeituraBanner@bannersPrefeitura')->middleware('cors');

