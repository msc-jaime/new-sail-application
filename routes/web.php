<?php

use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\CrearPDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('vehiculo', VehiculoController::class);

Route::get('vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
Route::get('vehiculo/create', [VehiculoController::class, 'create'])->name('vehiculo.create');
Route::get('vehiculo/{vehiculo}', [VehiculoController::class, 'show'])->name('vehiculo.show');
Route::get('vehiculo/{vehiculo}/edit', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
Route::post('vehiculo/', [VehiculoController::class, 'store'])->name('vehiculo.store');
Route::put('vehiculo/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculo.update');
Route::delete('vehiculo/{vehiculo}', [VehiculoController::class, 'delete'])->name('vehiculo.delete');


Route::get('pdf', [CrearPDFController::class, 'createPdfVehiculo'])->name('pdf.createPdfVehiculo');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/vehiculo', fn () => );
