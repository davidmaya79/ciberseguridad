@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('auditorias.index') }}"> 
                    <i class="fa fa-home fa-fw"></i> 
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mx-auto" style="width: 50%;">
              <div class="card-header bg-primary text-white">
                {{--  --}}
          
                {{--  --}}
                Auditoria
              </div>
              <div class="card-body text-center">
                {{-- <h5 class="card-title"><b>{{ $auditoria->nombre_cliente}}</b></h5> --}}
                <p>id de cliente: <b>{{ $auditoria->cliente_id}}</b></p>
                <p>Cliente: <b>{{ $auditoria->cliente->nombre_cliente }}</b></p>

                <p>Descripción: <b>{{ $auditoria->descripcion_auditoria }}</b></p>
                <p>Documentación: <b>{{ $auditoria->documentacion_auditoria }}</b></p>
                <p>Fecha de Inicio: <b>{{ $auditoria->fecha_inicio }}</b></p>
                <p>fecha de Entrega: <b>{{ $auditoria->fecha_fin }}</b></p>
                {{-- haker --}}
                 
              {{-- fin hacker --}}
              
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
