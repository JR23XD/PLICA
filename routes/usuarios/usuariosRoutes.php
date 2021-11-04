<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UsuarioController;

Route::group(['prefix' => 'usuarios'], function() {
  Route::get('', [UsuarioController::class, 'index'])->name('usuarios.index')->middleware('permission:usuarios.create|usuarios.show|usuarios.edit|usuarios.destroy');
  Route::get('crear', [UsuarioController::class, 'create'])->name('usuarios.create')->middleware('permission:usuarios.create');
  Route::post('store', [UsuarioController::class, 'store'])->name('usuarios.store')->middleware('permission:usuarios.store');
  Route::get('show/{id_usuario}', [UsuarioController::class, 'show'])->name('usuarios.show')->middleware('permission:usuarios.show');
  Route::get('edit/{id_usuario}', [UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('permission:usuarios.edit');
  Route::patch('update/{id_usuario}', [UsuarioController::class, 'update'])->name('usuarios.update')->middleware('permission:usuarios.update');
  Route::delete('destroy/{id_usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware('permission:usuarios.destroy');
  
});