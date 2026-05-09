<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/kalkulator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');
Route::get('/historia', [CalculatorController::class, 'history'])->name('calculator.history');
