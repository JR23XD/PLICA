<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\AlumnoController;

Route::group(['prefix' => 'alumnos'], function() {
  Route::get('crear', [AlumnoController::class, 'create'])->name('alumnos.create');
  Route::post('store', [AlumnoController::class, 'store'])->name('alumnos.store');
  });