<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Auditoria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
 
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clientes = Cliente::all();

        // $clientes = Cliente::paginate(9);
 
        // return view('clientes.index',['clientes' => $clientes]);
        $clientes = Cliente::query()
        ->with(['auditoria'])
        ->when(request('busqueda'), function ($query) {
            return $query->where('nombre_cliente', 'like', '%' . request('busqueda') . '%');
                // ->orWhereHas('cliente', function ($q) {
                // $q->where('nombre_cliente', 'like', '%' . request('busqueda') . '%');
    })

        
        ->paginate(9);
    return view('clientes.index', ['clientes' => $clientes]);
    }

    public function eliminados()
    {
        // $clientesEliminados = Cliente::onlyTrashed()->paginate(10);

        // return view('clientes.eliminados', ['clientes' => $clientesEliminados]);
        echo "Hola mundo";
    }
    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
            'nombre_cliente' => 'required|min:2|max:30',
            'email_cliente' => 'required|email|unique:clientes',
            'telefono_cliente' => 'required|min:8|max:20',
            'rut_cliente' => 'required|min:5|max:15|unique:clientes',
            'direccion_cliente' => 'required|min:5|max:30'
        ]);

        Cliente::create($request->all());

        // return $request->all();
        return redirect()
                ->route('clientes.index')
                ->with('success','Cliente registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre_cliente' => 'required|min:2|max:30',
            'email_cliente' => 'required|email|unique:clientes,email_cliente,' . $cliente->id,
            'telefono_cliente' => 'required|min:8|max:20',
            'rut_cliente' => 'required|min:5|max:15|unique:clientes,rut_cliente,' . $cliente->id,
            'direccion_cliente' => 'required|min:5|max:30'
        ]); 

        $cliente->fill($request->only([
            'nombre_cliente',
            'email_cliente',
            'telefono_cliente',
            'rut_cliente',
            'direccion_cliente',
        ]));

        if($cliente->isClean()){
            return back()->with('mensajedeadvertencia','Debe realizar al menos un cambio para actualizar.');
        }

        $cliente->update($request->all());

        return back()->with('mensajedeexito','Cliente Actualizado Correctamente.');
        // return 'Validado';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    //  public function restore($id)
    //  {
    //      $cliente = Cliente::onlyTrashed()->find($id);
 
    //      if ($cliente) {
    //          $cliente->restore();
    //          return redirect()->route('clientes.index');
    //      } else {
    //          return redirect()->route('clientes.index')->with('danger', 'No se pudo encontrar el cliente para restaurar.');
    //      }
    //  }
 
    //  /**
    //   * Permanently delete the specified resource from storage.
    //   *
    //   * @param  int  $id
    //   * @return \Illuminate\Http\Response
    //   */
    //  public function forceDelete($id)
    //  {
    //      $cliente = Cliente::onlyTrashed()->find($id);
 
    //      if ($cliente) {
    //          $cliente->forceDelete();
    //          return redirect()->route('clientes.index')->with('success', 'Cliente eliminado permanentemente correctamente.');
    //      } else {
    //          return redirect()->route('clientes.index')->with('danger', 'No se pudo encontrar el cliente para eliminar permanentemente.');
    //      }
    //  }
 

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return back()->with('danger', 'Cliente Eliminado correctamente.');

    }
}
