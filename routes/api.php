<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//ROTAS DA API DE CLIENTE

Route::get('/consulta/final-placa/{numero}');

Route::prefix('cliente')->group(function () {
    Route::get('/{id}', );
    Route::post('/', );
    Route::put('/{id}', );
    Route::delete('/{id}', );
});
