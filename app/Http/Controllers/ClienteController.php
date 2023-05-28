<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
 
        return view('clientes.index',['clientes' => $clientes]);
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
        return redirect()->route('clientes.index');
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

        $cliente->update($request->all());

        return back();
        // return 'Validado';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
