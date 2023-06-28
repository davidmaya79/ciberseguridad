@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Inicio alerta --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            {{-- Fin alerta --}}

            {{-- Inicio agregar --}}
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Auditoría" href="{{ route('auditorias.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            {{-- Fin agregar --}}
            <div class="col-md-12">
                @if (sizeof($auditorias) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Descripción</th>
                                    {{-- <th scope="col">Documentación</th> --}}
                                    <th scope="col">Fecha de Inicio</th>
                                    <th scope="col">Fecha de Fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($auditorias as $auditoria)
                                    <tr>
                                        <td class="text-center" width="20%">
                                            <a href="{{ route('auditorias.show', $auditoria) }}" class="btn btn-dark btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Ver Auditoría">
                                                <i class="fa fa-book fa-fw text-white"></i>
                                            </a>
                                            <a href="{{ route('auditorias.edit', $auditoria) }}" class="btn btn-primary btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Editar Auditoría">
                                                <i class="fa fa-pencil fa-fw text-white"></i>
                                            </a>
                                            <form action="{{ route('auditorias.destroy', $auditoria) }}" method="POST" class="d-inline-block formulario-eliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button id="delete" name="delete" type="submit" class="btn btn-danger btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Eliminar Auditoría" onclick="return confirm('¿Estás seguro de eliminar?')">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </form>
                                            {{--  --}}
                                            
                                            
                                            {{--  --}}
                                        </td>
                                        <td>{{ $auditoria->id }}</td>
                                        <td>{{ $auditoria->cliente->nombre_cliente }}</td>
                                        <td>{{ $auditoria->descripcion_auditoria }}</td>
                                        {{-- <td>{{ $auditoria->documentacion_auditoria }}</td> --}}
                                        <td>{{ $auditoria->fecha_inicio }}</td>
                                        <td>{{ $auditoria->fecha_fin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $auditorias->links() !!}
                        </div>
                    </div>
                @else
                    <div class="alert alert-secondary">No se encontraron resultados.</div>
                @endif
            </div>
        </div>
    </div>
     
@endsection
