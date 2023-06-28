<?php

namespace App\Http\Controllers;

use App\Models\Auditoria;
use App\Models\Hallazgo;
use App\Models\Cliente;
use Illuminate\Http\Request;

class HallazgoController extends Controller
{
    public function index()
    {
        $hallazgos = Hallazgo::paginate(10);
        return view('hallazgos.index', ['hallazgos' => $hallazgos]);
    }

    public function create()
    {
        $auditorias = Auditoria::all();
         
        // $empleados = Empleado::all();
         
        return view('hallazgos.create',['auditorias' => $auditorias]);
         
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion_hallazgo' => 'required|min:2|max:100',
            'fecha_deteccion' => 'required|date',
            'clasificacion_hallazgo' => 'required',
            'auditoria_id' => 'required'
        ]);
        
        Hallazgo::create($request->all());
         
         
        return redirect()
                ->route('hallazgos.index')
                ->with('success', 'Hallazgos registrado correctamente');
    }
         

        

          
    


    public function show(Hallazgo $hallazgo)
    {
        return view('hallazgos.show', ['hallazgo' => $hallazgo]);
    }

    

    
    public function edit(Hallazgo $hallazgo)
    {
        $auditorias = Auditoria::all();
        return view('hallazgos.edit', ['hallazgo'=> $hallazgo,'auditorias' => $auditorias]);
    }

    public function update(Request $request, Hallazgo $hallazgo)
    {
        $request->validate([
            'descripcion_hallazgo' => 'required|min:2|max:100',
            'fecha_deteccion' => 'required|date',
            'clasificacion_hallazgo' => 'required',
        ]);

        $hallazgo->fill($request->only([
            'descripcion_hallazgo',
            'fecha_deteccion',
            'clasificacion_hallazgo',
            'auditoria_id' /* => 'required' */
            
             
             
        ]));

        if ($hallazgo->isClean()) {
            return back()->with('warning', 'Debe realizar al menos un cambio para actualizar.');
        }
        

        $hallazgo->update($request->all());

        return back()->with('success', 'Hallazgo actualizada correctamente.');
    }
    public function destroy(Hallazgo $hallazgo)
    {
        $hallazgo->delete();

        return back()->with('danger', 'Hallazgo Eliminado correctamente.');
    }
}