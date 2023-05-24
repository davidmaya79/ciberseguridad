<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        // Obtener todos los clientes
        $clientes = Cliente::all();
         // Pasar los clientes a la vista
         return view('clientes.index',['clientes' => $clientes]);
        // return view('clientes.index', compact('clientes'));
    }
}
