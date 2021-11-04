<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagos\PagosController;

Route::group(['prefix' => 'pagos'], function() {
    Route::get('', [PagosController::class, 'index'])->name('pagos.index')->middleware('permission:pagos.create|pagos.show|pagos.edit|pagos.destroy');
    Route::get('create', [PagosController::class, 'create'])->name('pagos.create')->middleware('permission:pagos.create');
    Route::post('store', [PagosController::class, 'store'])->name('pagos.store')->middleware('permission:pagos.store');
    Route::get('show/{id_pago}', [PagosController::class, 'show'])->name('pagos.show')->middleware('permission:pagos.show');
    Route::get('edit/{id_pago}', [PagosController::class, 'edit'])->name('pagos.edit')->middleware('permission:pagos.edit');
    Route::patch('update/{id_pago}', [PagosController::class, 'update'])->name('pagos.update')->middleware('permission:pagos.update');
    Route::delete('destroy/{id_pago}', [PagosController::class,'destroy'])->name('pagos.destroy')->middleware('permission:pagos.destroy'); 
});