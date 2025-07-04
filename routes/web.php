<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EventController::class,  'index']);
Route::get('/eventos/form', [EventController::class,  'formCreate'])->middleware('auth');
Route::post('/eventos/criar', [EventController::class, 'store'])->middleware('auth');
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/eventos/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/eventos/editar/{id}', [EventController::class, 'formEdit'])->middleware('auth');
Route::put('/eventos/atualizar/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/eventos/inscrever/{id}', [EventController::class, 'inscreverEvento'])->middleware('auth');
