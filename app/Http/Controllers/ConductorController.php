<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    public function index(){
        $conductores = Conductor::orderBy('id', 'desc')->paginate(10);
        return view('conductor.index', compact('conductores'));
    }

    public function create(){
        return view('conductor.create');
    }

    public function store(Request $request){
        
        $request->validate([
            '_token' => 'required',
            'documento_identificacion' => 'required',
            'nombre' => 'required', 
            'celular' => 'required',
            'email' => 'required',
            'fecha_nacimiento' => 'required'
        ]);

        $data = $request->post();

        Conductor::create($request->post());
        return redirect()->route('conductor.index')->with('data', null);
    }

    public function edit(Conductor $conductor){
        return view('conductor.edit', compact('conductor'));
    }

    public function update(Request $request, Conductor $conductor){
        $conductor->fill($request->post())->save();
        return redirect()->route('conductor.index');
    }

    public function delete(Conductor $conductor){
        $conductor->delete();
        return redirect()->route('conductor.index');
    }

    public function show(Conductor $conductor){
        return view('conductor.show', compact('conductor'));
    }
}
