<?php
namespace App\Http\Controllers;

use App\Models\Auditoria;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Hallazgo;
use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    public function index()
    {
        $auditorias = Auditoria::paginate(9);
        return view('auditorias.index', ['auditorias' => $auditorias]);
    }

    public function create()
    {
        $clientes = Cliente::all();
         
        // $empleados = Empleado::all();
         
        return view('auditorias.create',['clientes' => $clientes/* ,'empleados' => $empleados */]);
         
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion_auditoria' => 'required|min:2|max:100',
            'documentacion_auditoria' => 'required|min:2|max:100',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'cliente_id' => 'required'
            // 'empleado_id' => 'required'
             

        ]);

        Auditoria::create($request->all());
         
         
        return redirect()
                ->route('auditorias.index')
                ->with('success', 'Auditoria registrada correctamente');
    }

    public function show(Auditoria $auditoria)
    {
         
        return view('auditorias.show', ['auditoria' => $auditoria]);
         
    }
     
 


    public function edit(Auditoria $auditoria)
    {
        $clientes = Cliente::all();
        return view('auditorias.edit', ['auditoria' => $auditoria,'clientes'=> $clientes]);
    }

    public function update(Request $request, Auditoria $auditoria)
    {
        $request->validate([
            'descripcion_auditoria' => 'required|min:2|max:100',
            'documentacion_auditoria' => 'required|min:2|max:100',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
             
        ]);

        $auditoria->fill($request->only([
            'descripcion_auditoria',
            'documentacion_auditoria',
            'fecha_inicio',
            'fecha_fin',
            'cliente_id' => 'required'
            
             
             
        ]));

        if ($auditoria->isClean()) {
            return back()->with('warning', 'Debe realizar al menos un cambio para actualizar.');
        }
        

        $auditoria->update($request->all());

        return back()->with('success', 'Auditoria actualizada correctamente.');
    }

    public function destroy(Auditoria $auditoria)
    {
        $auditoria->delete();

        return back();
    }
}
