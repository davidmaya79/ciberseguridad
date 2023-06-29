<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Auditoria;
use App\Models\Accion;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $empleados = Empleado::paginate(9);
 
        // return view('empleados.index', ['empleados' => $empleados]);
        $empleados = Empleado::query()
        ->with(['auditoria'])
        ->when(request('busqueda'), function ($query) {
            return $query->where('nombre_empleado', 'like', '%' . request('busqueda') . '%');
                // ->orWhereHas('cliente', function ($q) {
                // $q->where('nombre_cliente', 'like', '%' . request('busqueda') . '%');
    })

        
        ->paginate(9);
    return view('empleados.index', ['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_empleado' => 'required|min:2|max:30',
            'apellido_empleado' => 'required|min:2|max:30',
            'rut_empleado' => 'required|min:5|max:15|unique:empleados',
            'email_empleado' => 'required|email|unique:empleados',
            'telefono_empleado' => 'required|min:8|max:20',
            'puesto_empleado' => 'required|min:2|max:30',
        ]);

        Empleado::create($request->all());

        return redirect()
                ->route('empleados.index')
                ->with('success', 'Empleado registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', ['empleado' => $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', ['empleado' => $empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre_empleado' => 'required|min:2|max:30',
            'apellido_empleado' => 'required|min:2|max:30',
            'rut_empleado' => 'required|min:5|max:15|unique:empleados,rut_empleado,' . $empleado->id,
            'email_empleado' => 'required|email|unique:empleados,email_empleado,' . $empleado->id,
            'telefono_empleado' => 'required|min:8|max:20',
            'puesto_empleado' => 'required|min:2|max:30',
        ]);

        $empleado->fill($request->only([
            'nombre_empleado',
            'apellido_empleado',
            'rut_empleado',
            'email_empleado',
            'telefono_empleado',
            'puesto_empleado',
        ]));

        if ($empleado->isClean()) {
            return back()->with('mensajedeadvertencia', 'Debe realizar al menos un cambio para actualizar.');
        }

        $empleado->update($request->all());

        return back()->with('mensajedeexito', 'Empleado actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return back()->with('danger', 'Empleado Eliminado correctamente.');
    }
}
