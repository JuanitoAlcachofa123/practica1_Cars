<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::middleware('api')->group(function () {
    Route::get('/cars', [CarController::class, 'index']); // Listado de la estructura
    Route::get('/cars/{id}', [CarController::class, 'show']); // Búsqueda de una tupla
    Route::post('/cars', [CarController::class, 'store']); // Registrar un nuevo elemento
    Route::put('/cars/{id}', [CarController::class, 'update']); // Editar un registro
    Route::delete('/cars/{id}', [CarController::class, 'destroy']); // Eliminar un registro
});
