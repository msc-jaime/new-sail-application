<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos = Vehiculo::orderBy('id', 'desc')->paginate(2);
        //$vehiculos = Vehiculo::all();
        return view('vehiculo.index', compact('vehiculos'));
    }

    public function create(){
        return view('vehiculo.create');
    }

    public function store(Request $request){
        
        $request->validate([
            '_token' => 'required',
            'placa' => 'required',
            'marca' => 'required', 
            'modelo' => 'required',
            'color' => 'required'
        ]);

        $data = $request->post();

        Vehiculo::create($request->post());
        return redirect()->route('vehiculo.index')->with('data', null);
    }

    public function edit(Vehiculo $vehiculo){
        return view('vehiculo.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo){
        $vehiculo->fill($request->post())->save();
        return redirect()->route('vehiculo.index');
    }

    public function delete(Vehiculo $vehiculo){
        $vehiculo->delete();
        return redirect()->route('vehiculo.index');
    }

    public function show(Vehiculo $vehiculo){
        return view('vehiculo.show', compact('vehiculo'));
    }
}
