<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;

Route::get('/', [EmployeController::class, 'index']);

Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');

Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');

Route::get('/voitures/{id}', [VoitureController::class, 'show'])->name('voitures.show');