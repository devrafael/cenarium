<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/eventos/{eventoId}', function ($eventoId) {
    return view('evento-detalhe', ['eventoId' => $eventoId]);
});

Route::get('/home', function () {
    $buscar = request(key: 'buscar');

    return view('home', ['buscar' => $buscar]);
});
