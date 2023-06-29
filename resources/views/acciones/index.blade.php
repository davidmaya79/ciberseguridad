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
             {{-- danger --}}
             @if (session('danger'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('danger') }}
             </div>
             @endif
             {{-- fin danger --}}

             

            {{-- Inicio agregar --}}
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Acción" href="{{ route('acciones.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            {{-- Fin agregar --}}
            {{-- Salto de línea --}}
    <div class="row mt-3"></div>

    {{-- buscador --}}
    <div class="d-md-flex justify-content-md-end">
       <form action = "{{ route('acciones.index') }}" method="GET">
           <div class="btn-group">
               <input type="text" name="busqueda" class="form-control">
               <input type="submit" name="enviar" class="btn btn-primary">
           </div>
       </form>
       </div>
    {{-- fin buscador --}}
            <div class="col-md-12">
                @if (sizeof($acciones) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha de Implementación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acciones as $accion)
                                    <tr>
                                        <td class="text-center" width="20%">
                                            <a href="{{ route('acciones.show', $accion) }}" class="btn btn-dark btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Ver Acción">
                                                <i class="fa fa-book fa-fw text-white"></i>
                                            </a>
                                            <a href="{{ route('acciones.edit', $accion) }}" class="btn btn-primary btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Editar Acción">
                                                <i class="fa fa-pencil fa-fw text-white"></i>
                                            </a>
                                            <form action="{{ route('acciones.destroy', $accion) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button id="delete" name="delete" type="submit" class="btn btn-danger btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Eliminar Acción" onclick="return confirm('¿Estás seguro de eliminar?')">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $accion->id }}</td>
                                        <td>{{ $accion->auditoria->cliente->nombre_cliente }}</td>
                                        <td>{{ $accion->descripcion_acciones }}</td>
                                        <td>{{ $accion->fecha_implementacion }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $acciones->links() !!}
                        </div>
                    </div>
                @else
                    <div class="alert alert-secondary">No se encontraron resultados.</div>
                @endif
            </div>
        </div>
    </div>
@endsection
