<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EventController::class,  'index']);
Route::get('/eventos/criar', [EventController::class,  'criarEvento']);

Route::get('/eventos/{eventoId}', function ($eventoId) {
    return view('evento-detalhe', ['eventoId' => $eventoId]);
});

Route::get('/home', function () {
    $buscar = request(key: 'buscar');

    return view('home', ['buscar' => $buscar]);
});
