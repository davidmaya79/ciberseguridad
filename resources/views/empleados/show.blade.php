@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('empleados.index') }}"> 
                    <i class="fa fa-home fa-fw"></i> 
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mx-auto" style="width: 50%;">
              <div class="card-header bg-primary text-white">
                Empleado
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><b>{{ $empleado->nombre_empleado }} {{ $empleado->apellido_empleado }}</b></h5>
                <p>Email: <b>{{ $empleado->email_empleado }}</b></p>
                <p>Teléfono: <b>{{ $empleado->telefono_empleado }}</b></p>
                <p>RUT: <b>{{ $empleado->rut_empleado }}</b></p>
                <p>Puesto: <b>{{ $empleado->puesto_empleado }}</b></p>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
