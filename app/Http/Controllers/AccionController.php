<?php

namespace App\Http\Controllers;

use App\Models\Auditoria;
use App\Models\Accion;
use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Http\Request;

class AccionController extends Controller
{
    // public function index()
    // {
    //     $acciones = Accion::paginate(10);
    //     return view('acciones.index', ['acciones' => $acciones]);
    // }
     public function index()
{
    $acciones = Accion::query()
        ->with(['auditoria'])
        ->when(request('busqueda'), function ($query) {
            return $query->where('auditoria_id', 'like', '%' . request('busqueda') . '%')
                ->orWhereHas('auditoria.cliente', function ($q) {
                    $q->where('nombre_cliente', 'like', '%' . request('busqueda') . '%');
                });
        })
        ->paginate(9);
        // ->withQueryString();

    return view('acciones.index', ['acciones' => $acciones]);
}


    public function create()
    {
        $auditorias = Auditoria::all();
        $empleados = Empleado::all();
        // $clientes = Cliente::all();
         

         
        return view('acciones.create', ['auditorias' => $auditorias,'empleados' => $empleados]);
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'responsable_acciones' => 'required|min:2|max:100',
            'descripcion_acciones' => 'required|min:2|max:100',
            'fecha_implementacion' => 'required|date',
            'auditoria_id' => 'required',
            'empleado_id' => 'required'
        ]);
        // dd($request->all());
        Accion::create($request->all());
        
        // $empleado = Empleado::findOrFail($request->empleado_id);
        // $request->merge(['responsable_acciones' => $empleado->nombre_empleado]);
         
        return redirect()
            ->route('acciones.index')
            ->with('success', 'Acciones registradas correctamente');
    }

    public function show(Accion $accione)
    {
        return view('acciones.show', ['accion' => $accione]);
    }

    public function edit(Accion $accione)
    {
        $auditorias = Auditoria::all();
        return view('acciones.edit', ['accion' => $accione, 'auditorias' => $auditorias]);
    }

    public function update(Request $request, Accion $accione)
    {
        $request->validate([
            'responsable_acciones' => 'required|min:2|max:100',
            'descripcion_acciones' => 'required|min:2|max:100',
            'fecha_implementacion' => 'required|date',
            // 'auditoria_id' => 'required'
        ]);

        $accione->fill($request->only([
            'responsable_acciones',
            'descripcion_acciones',
            'fecha_implementacion',
            'auditoria_id'
        ]));

        if ($accione->isClean()) {
            return back()->with('warning', 'Debe realizar al menos un cambio para actualizar.');
        }

        $accione->update($request->all());

        return back()->with('success', 'Acciones actualizadas correctamente.');
    }

    public function destroy(Accion $accione)
    {
        $accione->delete();

        return back()->with('danger', 'Acción Eliminado correctamente.');
    }
}
