
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facturas\FacturasController;

Route::group(['prefix' => 'facturas'], function() {
    Route::get('', [FacturasController::class, 'index'])->name('facturas.index')->middleware('permission:facturas.create|facturas.show|facturas.edit|facturas.destroy');
    Route::get('create', [FacturasController::class, 'create'])->name('facturas.create')->middleware('permission:facturas.create');
    Route::post('store', [FacturasController::class, 'store'])->name('facturas.store')->middleware('permission:facturas.store');
    Route::get('show/{id_factura}', [FacturasController::class, 'show'])->name('facturas.show')->middleware('permission:facturas.show');
    Route::get('edit/{id_factura}', [FacturasController::class, 'edit'])->name('facturas.edit')->middleware('permission:facturas.edit');
    Route::patch('update/{id_factura}', [FacturasController::class, 'update'])->name('facturas.update')->middleware('permission:facturas.update');
    Route::delete('destroy/{id_factura}', [FacturasController::class, 'destroy'])->name('facturas.destroy')->middleware('permission:facturas.destroy');
});