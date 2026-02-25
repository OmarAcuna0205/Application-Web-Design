<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Suma
Route::get('/suma', 'App\Http\Controllers\SumaController@show');
Route::post('/suma', 'App\Http\Controllers\SumaController@calculate');

// Ruta de Superhéroes
Route::get('/superheroes', [SuperheroController::class, 'index']);