<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clases\ClaseController;

  Route::group(['prefix' => 'clases'], function() {
  Route::get('', [ClaseController::class, 'index'])->name('clases.index')->middleware('permission:clases.create|clases.show|clases.edit|clases.destroy');
  Route::get('crear', [ClaseController::class, 'create'])->name('clases.create')->middleware('permission:clases.create');
  Route::post('store', [ClaseController::class, 'store'])->name('clases.store')->middleware('permission:clases.store');
  Route::get('show/{id_clase}', [ClaseController::class, 'show'])->name('clases.show')->middleware('permission:clases.show');
  Route::get('edit/{id_clase}', [ClaseController::class, 'edit'])->name('clases.edit')->middleware('permission:clases.edit');
  Route::patch('update/{id_clase}', [ClaseController::class, 'update'])->name('clases.update')->middleware('permission:clases.update');
  Route::delete('destroy/{id_clase}', [ClaseController::class, 'destroy'])->name('clases.destroy')->middleware('permission:clases.destroy');
});