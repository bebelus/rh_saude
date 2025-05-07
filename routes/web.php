<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('collaborators', App\Http\Controllers\CollaboratorController::class);
Route::resource('bonds', App\Http\Controllers\BondController::class);
Route::resource('works', App\Http\Controllers\WorkController::class);
Route::resource('health_units', App\Http\Controllers\HealthUnitController::class);
Route::resource('enterprises', App\Http\Controllers\EnterpriseController::class);
Route::resource('sectors', App\Http\Controllers\SectorController::class);


require __DIR__.'/auth.php';
