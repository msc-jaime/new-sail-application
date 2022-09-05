<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Vehiculo;

class CrearPDFController extends Controller
{
    public function createPdfVehiculo(){
        $vehiculos = Vehiculo::all();
        $pdf = Pdf::loadView('pdf.vehiculos', compact('vehiculos'));
        return $pdf->stream();
    }
}
