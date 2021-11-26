<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ROTAS DA API DE CLIENTE
Route::get('/consulta/final-placa/{numero}', 'App\Http\Controllers\api\ConsultaController@consulta');

Route::prefix('cliente')->group(function () {
    Route::get('/{id}', 'App\Http\Controllers\api\ClienteController@show');
    Route::post('/', 'App\Http\Controllers\api\ClienteController@store');
    Route::put('/{id}', 'App\Http\Controllers\api\ClienteController@update');
    Route::delete('/{id}', 'App\Http\Controllers\api\ClienteController@destroy');
});
