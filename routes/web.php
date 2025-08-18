<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploController; 

Route::get('/', function () {
    return view('welcome');
});

// Rotas de teste com controller fake
Route::get('/hello', [ExemploController::class, 'hello']);
Route::get('/lista', [ExemploController::class, 'lista']);
