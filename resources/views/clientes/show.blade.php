@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href=""> 
                    <i class="fa fa-home fa-fw"></i> 
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mx-auto" style="width: 50%;">
              <div class="card-header bg-primary text-white">
                Cliente
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><b>{{ $cliente->nombre_cliente }}</b></h5>
                <p>Email: <b>{{ $cliente->email_cliente }}</b></p>
                <p>Teléfono: <b>{{ $cliente->telefono_cliente }}</b></p>
                <p>RUT: <b>{{ $cliente->rut_cliente }}</b></p>
                <p>Dirección: <b>{{ $cliente->direccion_cliente }}</b></p>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
