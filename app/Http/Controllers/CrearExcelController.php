<?php

namespace App\Http\Controllers;

use App\Exports\VehiculoExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CrearExcelController extends Controller
{
    public function createDownloadExcelVehiculo(){ 
        Excel::store(new VehiculoExport, 'vehiculo.xlsx', 'local');
        return Excel::download(new VehiculoExport, 'vehiculo.xlsx');
    }
}
