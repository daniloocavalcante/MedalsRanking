<?php

use App\Http\Controllers\MedalsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MedalsController::class, 'index'])->name('index');
Route::post('/', [MedalsController::class, 'rank'])->name('rank');
Route::get('/about', [MedalsController::class, 'about'])->name('about');
Route::post('/example', [MedalsController::class, 'example'])->name('example');


