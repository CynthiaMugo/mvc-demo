<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Working! My first Laravel project!';
});

use App\Http\Controllers\DramaController;

Route::get('/dramas', [DramaController::class, 'index']);
Route::get('/dramas/create', [DramaController::class, 'create']);
Route::post('/dramas', [DramaController::class, 'store']);
