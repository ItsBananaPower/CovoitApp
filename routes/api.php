<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;

Route::get('/employes', [EmployeController::class, 'index']);
Route::get('/employes/{id}', [EmployeController::class, 'show']);
Route::get('/voitures/{id}', [VoitureController::class, 'show']);