<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\NumbersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NameController::class, 'index'])->name('home');
Route::post('/set/name', [NameController::class, 'set'])->name('name.set');
Route::get('/name', [NameController::class, 'get'])->name('name.get');

Route::post('/set/numbers', [NumbersController::class, 'set'])->name('numbers.set');
Route::post('/increment/numbers', [NumbersController::class, 'increment'])->name('numbers.increment');
Route::post('/set-pipe/numbers', [NumbersController::class, 'pipe'])->name('numbers.pipe');
Route::get('/numbers', [NumbersController::class, 'get'])->name('numbers.get');
