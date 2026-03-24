<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;

Route::get('/', [EmployeController::class, 'index']);

Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');

Route::get('/employes/{id}', [EmployeController::class, 'show'])
    ->name('employes.show')
    ->middleware(['verif.voiture', 'verif.campus']);

Route::get('/voitures/{id}', [VoitureController::class, 'show'])
    ->name('voitures.show')
    ->middleware('verif.bus');

Route::get('/voitures/create/{id_employe}', [VoitureController::class, 'create'])->name('voitures.create');

Route::post('/voitures', [VoitureController::class, 'store'])->name('voitures.store');

Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');

Route::get('/trajets', function() { return "Liste des trajets (Pas encore dispo)"; })->name('trajets.index');
Route::get('/campuses', function() { return "Liste des campus (Pas encore dispo)"; })->name('campuses.index');