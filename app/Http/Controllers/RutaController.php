<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;
use App\Models\Vehiculo;
use App\Models\Ruta;

class RutaController extends Controller
{
    /**
     * Show all the $rutas
     * 
     * @return view()
     */
    public function index(){
        $rutas = Ruta::select(
                'conductors_vehiculos.id', 
                'conductors_vehiculos.id_conductor', 
                'conductors_vehiculos.id_vehiculo',
                'conductors_vehiculos.origen',
                'conductors_vehiculos.destino',
                'conductors_vehiculos.fecha_salida',
                'conductors_vehiculos.fecha_llegada',
                'conductors.documento_identificacion',
                'conductors.nombre',
                'vehiculos.placa',
                'vehiculos.marca',
                )
            ->join('conductors', 'conductors.id', '=', 'conductors_vehiculos.id_conductor')
            ->join('vehiculos', 'vehiculos.id', '=', 'conductors_vehiculos.id_vehiculo')
            ->orderBy('conductors_vehiculos.id', 'desc')->paginate(10);
        //$vehiculos = Vehiculo::all();
        return view('ruta.index', compact('rutas'));
    }

    /**
     * Show view the form create for a $ruta
     * 
     * @return view()
     */
    public function create(){
        $vehiculos = Vehiculo::all();
        $conductors = Conductor::all();
        return view('ruta.create', compact('vehiculos', 'conductors'));
    }

    /**
     * Store a $ruta
     * 
     * @param Request $request
     * 
     * @return redirect()->route()
     */
    public function store(Request $request){
        
        $request->validate([
            'id_conductor' => 'required',
            'id_vehiculo' => 'required', 
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required|date',
            'fecha_llegada' => 'required|date'
        ]);

        Ruta::create($request->post());
        return redirect()->route('ruta.index');
    }

    /**
     * Show view the form edit for a $ruta
     * 
     * @param Ruta $ruta
     * 
     * @return view()
     */
    public function edit(Ruta $ruta){
        $vehiculos = Vehiculo::all();
        $conductors = Conductor::all();
        return view('ruta.edit', compact('ruta', 'vehiculos', 'conductors'));
    }

    /**
     * Update a $ruta
     * 
     * @param Request $request
     * @param Ruta $ruta
     * 
     * @return redirect()->route()
     */
    public function update(Request $request, Ruta $ruta){
        $request->validate([
            'id_conductor' => 'required',
            'id_vehiculo' => 'required', 
            'origen' => 'required',
            'destino' => 'required',
            'fecha_salida' => 'required|date',
            'fecha_llegada' => 'required|date'
        ]);
        
        $ruta->fill($request->post())->save();
        return redirect()->route('ruta.index');
    }

    /**
     * Delete a $ruta
     * 
     * @param Ruta $ruta
     * 
     * @return redirect()->route()
     */
    public function delete(Ruta $ruta){
        $ruta->delete();
        return redirect()->route('ruta.index');
    }

    /**
     * Show info the $ruta 
     * 
     * @param Ruta $ruta
     * 
     * @return view()
     */
    public function show(Ruta $ruta){
        return view('ruta.show', compact('ruta'));
    }
}
