<?php

use App\Http\Controllers\GrowthController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', [GrowthController::class, 'showindex'])->name('home');
// Route::get('/', [CasesController::class, 'index'])->name('home');




