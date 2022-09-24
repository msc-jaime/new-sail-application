<?php

use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\CrearPDFController;
use App\Http\Controllers\CrearExcelController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();


Route::prefix('app/')->middleware('auth')->group(function () { 
    
    Route::view('', 'dashboard')->name('dashboard');
    Route::get('vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
    Route::get('vehiculo/create', [VehiculoController::class, 'create'])->name('vehiculo.create');
    Route::get('vehiculo/{vehiculo}', [VehiculoController::class, 'show'])->name('vehiculo.show');
    Route::get('vehiculo/{vehiculo}/edit', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
    Route::post('vehiculo/', [VehiculoController::class, 'store'])->name('vehiculo.store');
    Route::put('vehiculo/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculo.update');
    Route::delete('vehiculo/{vehiculo}', [VehiculoController::class, 'delete'])->name('vehiculo.delete');
    
    Route::get('conductor', [ConductorController::class, 'index'])->name('conductor.index');
    Route::get('conductor/create', [ConductorController::class, 'create'])->name('conductor.create');
    Route::get('conductor/{conductor}', [ConductorController::class, 'show'])->name('conductor.show');
    Route::get('conductor/{conductor}/edit', [ConductorController::class, 'edit'])->name('conductor.edit');
    Route::post('conductor/', [ConductorController::class, 'store'])->name('conductor.store');
    Route::put('conductor/{conductor}', [ConductorController::class, 'update'])->name('conductor.update');
    Route::delete('conductor/{conductor}', [ConductorController::class, 'delete'])->name('conductor.delete');
    
    Route::get('ruta', [RutaController::class, 'index'])->name('ruta.index');
    Route::get('ruta/create', [RutaController::class, 'create'])->name('ruta.create');
    Route::get('ruta/{ruta}', [RutaController::class, 'show'])->name('ruta.show');
    Route::get('ruta/{ruta}/edit', [RutaController::class, 'edit'])->name('ruta.edit');
    Route::post('ruta/', [RutaController::class, 'store'])->name('ruta.store');
    Route::put('ruta/{ruta}', [RutaController::class, 'update'])->name('ruta.update');
    Route::delete('ruta/{ruta}', [RutaController::class, 'delete'])->name('ruta.delete');
});



Route::post('/send-mail-contact', [SendEmailController::class, 'sendEmailContact'])->name('send.emailContact');
Route::get('/view-pdf', [CrearPDFController::class, 'createViewPdfVehiculo'])->name('pdf.createViewPdfVehiculo');
Route::get('/download-pdf', [CrearPDFController::class, 'createDownloadPdfVehiculo'])->name('pdf.createDownloadPdfVehiculo');
Route::get('/download-excel', [CrearExcelController::class, 'createDownloadExcelVehiculo'])->name('excel.createDownloadExcelVehiculo');


