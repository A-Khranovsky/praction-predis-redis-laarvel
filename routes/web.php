<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'set'])->name('name.set');
Route::get('/name', [HomeController::class, 'get'])->name('name.get');
