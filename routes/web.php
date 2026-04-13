<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Working! My first Laravel project!';
});

use App\Http\Controllers\DramaController;

Route::get('/dramas', [DramaController::class, 'index']);
Route::get('/dramas/create', [DramaController::class, 'create']);
Route::post('/dramas', [DramaController::class, 'store']);

// route to edit a drama
Route::get('/dramas/{id}/edit', [DramaController::class, 'edit']);
Route::put('/dramas/{id}', [DramaController::class, 'update']);

// route to delete a drama
Route::delete('/dramas/{id}', [DramaController::class, 'destroy']);

// try toggle functionality
Route::patch('/dramas/{id}/toggle', [DramaController::class, 'toggle']);
