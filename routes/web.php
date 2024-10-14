<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CinestarController;

Route::get('/', function () {
    return view('index');

});

Route::get('/cines', [CinestarController::class, 'cines'])->name('cines');

Route::get('/peliculas/{id}', [CinestarController::class, 'peliculas'])->name('peliculas');

Route::get('/pelicula/{id}', [CinestarController::class, 'pelicula'])->name('pelicula');

Route::get('/cine/{id}', [CinestarController::class, 'cine'])->name('cine');

