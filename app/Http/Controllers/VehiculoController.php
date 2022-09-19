<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{

    /**
     * Show all the $vehiculos
     * 
     * @return view()
     */
    public function index(){
        $vehiculos = Vehiculo::orderBy('id', 'desc')->paginate(10);
        //$vehiculos = Vehiculo::all();
        return view('vehiculo.index', compact('vehiculos'));
    }

    /**
     * Show view the form create for a $vehiculo
     * 
     * @return view()
     */
    public function create(){
        return view('vehiculo.create');
    }

    /**
     * Store a $vehiculo
     * 
     * @param Request $request
     * 
     * @return redirect()->route()
     */
    public function store(Request $request){
        
        $request->validate([
            'placa' => 'required',
            'marca' => 'required', 
            'modelo' => 'required',
            'color' => 'required'
        ]);

        Vehiculo::create($request->post()); 
        return redirect()->route('vehiculo.index')->with('success','Vehiculo has been created successfully.');
    }

    
    /**
     * Show view the form edit for a $vehiculo
     * 
     * @param Vehiculo $vehiculo
     * 
     * @return view()
     */
    public function edit(Vehiculo $vehiculo){
        return view('vehiculo.edit', compact('vehiculo'));
    }



    /**
     * Update a $vehiculo
     * 
     * @param Request $request
     * @param Vehiculo $vehiculo
     * 
     * @return redirect()->route()
     */
    public function update(Request $request, Vehiculo $vehiculo){
        $vehiculo->fill($request->post())->save();
        return redirect()->route('vehiculo.index')->with('success','Vehiculo Has Been updated successfully');
    }


    /**
     * Delete a $vehiculo
     * 
     * @param Vehiculo $vehiculo
     * 
     * @return redirect()->route()
     */
    public function delete(Vehiculo $vehiculo){
        $vehiculo->delete();
        return redirect()->route('vehiculo.index')->with('success','Vehiculo has been deleted successfully');
    }

    
    /**
     * Show info the $vehiculo
     * 
     * @param Vehiculo $vehiculo
     * 
     * @return view()
     */
    public function show(Vehiculo $vehiculo){
        return view('vehiculo.show', compact('vehiculo'));
    }
}
