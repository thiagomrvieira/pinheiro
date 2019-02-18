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

Route::get('v1/noticias/', 'controladorNoticias@noticias');
Route::get('v1/noticias/capa', 'controladorNoticias@capa');
Route::get('v1/noticias/{id}', 'controladorNoticias@noticia');

Route::get('v1/areas/', 'controladorArea@areas');

