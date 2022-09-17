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
        $rutas = Ruta::orderBy('id', 'desc')->paginate(10);
        //$vehiculos = Vehiculo::all();
        return view('ruta.index', compact('rutas'));
    }

    /**
     * Show view the form create for a $ruta
     * 
     * @return view()
     */
    public function create(){
        return view('ruta.create');
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
            '_token' => 'required',
            'placa' => 'required',
            'marca' => 'required', 
            'modelo' => 'required',
            'color' => 'required'
        ]);

        $data = $request->post();

        Ruta::create($request->post());
        return redirect()->route('vehiculo.index')->with('data', null);
    }

    /**
     * Show view the form edit for a $ruta
     * 
     * @param Ruta $ruta
     * 
     * @return view()
     */
    public function edit(Ruta $ruta){
        return view('ruta.edit', compact('ruta'));
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
