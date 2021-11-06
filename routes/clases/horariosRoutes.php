<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clases\HorarioController;

Route::group(['prefix' => 'horarios'], function() {
  Route::get('crear/{id_clase}', [HorarioController::class, 'create'])->name('horarios.create');
  Route::post('store/{id_clase}', [HorarioController::class, 'store'])->name('horarios.store');
  Route::get('edit/{id_horario}', [HorarioController::class, 'edit'])->name('horarios.edit');
  Route::patch('update/{id_horario}', [HorarioController::class, 'update'])->name('horarios.update');
  Route::delete('destroy/{id_horario}', [HorarioController::class, 'destroy'])->name('horarios.destroy');
  });