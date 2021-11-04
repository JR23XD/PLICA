<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\ProfesorController;

Route::group(['prefix' => 'profesor'], function() {
  Route::get('crear', [ProfesorController::class, 'create'])->name('profesores.create');
  Route::post('store', [ProfesorController::class, 'store'])->name('profesores.store');
  });