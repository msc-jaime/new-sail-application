<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    /**
     * Show all the $conductors
     * 
     * @return view()
     */
    public function index(){
        $conductores = Conductor::orderBy('id', 'desc')->paginate(10);
        return view('conductor.index', compact('conductores'));
    }

    /**
     * Show view the form create for a $conductor
     * 
     * @return view()
     */
    public function create(){
        return view('conductor.create');
    }

    /**
     * Store a $conductor
     * 
     * @param Request $request
     * 
     * @return redirect()->route()
     */
    public function store(Request $request){
        
        $request->validate([
            'documento_identificacion' => 'required|unique:conductors',
            'nombre' => 'required', 
            'celular' => 'required|unique:conductors',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required'
        ]);

        $data = $request->post();

        Conductor::create($request->post());
        return redirect()->route('conductor.index')->with('data', null);
    }

    /**
     * Show view the form edit for a $conductor
     * 
     * @param Conductor $conductor
     * 
     * @return view()
     */
    public function edit(Conductor $conductor){
        return view('conductor.edit', compact('conductor'));
    }

    /**
     * Update a $conductor
     * 
     * @param Request $request
     * @param Conductor $conductor
     * 
     * @return redirect()->route()
     */
    public function update(Request $request, Conductor $conductor){
        $request->validate([
            'documento_identificacion' => 'required|unique:conductors',
            'nombre' => 'required', 
            'celular' => 'required|unique:conductors',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required'
        ]);

        
        $conductor->fill($request->post())->save();
        return redirect()->route('conductor.index');
    }

    /**
     * Delete a $conductor
     * 
     * @param Conductor $conductor
     * 
     * @return redirect()->route()
     */
    public function delete(Conductor $conductor){
        $conductor->delete();
        return redirect()->route('conductor.index');
    }

    /**
     * Show info the $conductor
     * 
     * @param Conductor $conductor
     * 
     * @return view()
     */
    public function show(Conductor $conductor){
        return view('conductor.show', compact('conductor'));
    }
}
