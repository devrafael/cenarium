<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EventController::class,  'index']);
Route::get('/eventos/form', [EventController::class,  'formCreate']);
Route::post('/eventos/criar', [EventController::class, 'store']);

Route::get('/eventos/{id}', [EventController::class, 'show']);

Route::get('/home', function () {
    $buscar = request(key: 'buscar');

    return view('home', ['buscar' => $buscar]);
});
