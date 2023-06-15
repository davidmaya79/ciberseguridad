@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('acciones.index') }}"> 
                        <i class="fa fa-home fa-fw"></i> 
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Detalles de la Acción</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $accion->id }}</td>
                                </tr>
                                <tr>
                                    <th>Auditoría</th>
                                    <td>{{ $accion->auditoria->cliente->nombre_cliente }}</td>
                                </tr>
                                <tr>
                                    <th>Responsable de Acciones</th>
                                    <td>{{ $accion->responsable_acciones }}</td>
                                </tr>
                                <tr>
                                    <th>Descripción</th>
                                    <td>{{ $accion->descripcion_acciones }}</td>
                                </tr>
                                <tr>
                                    <th>Fecha de Implementación</th>
                                    <td>{{ $accion->fecha_implementacion }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
