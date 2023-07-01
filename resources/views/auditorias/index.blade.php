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
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Auditoría" href="{{ route('auditorias.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
             

            {{-- Fin agregar --}}
             {{-- Salto de línea --}}
    <div class="row mt-3"></div>

             {{-- buscador --}}
             {{-- <div class="d-md-flex justify-content-md-end">
                <form action = "{{ route('auditorias.index') }}" method="GET">
                    <div class="btn-group">
                        <input type="text" name="busqueda" class="form-control">
                        <input type="submit" name="enviar" class="btn btn-primary">
                    </div>
                </form>
                </div> --}}
             {{-- fin buscador --}}
              {{-- buscador --}}
<div class="d-md-flex justify-content-md-end">
    <form action="{{ route('auditorias.index') }}" method="GET">
        <div class="input-group">
            <input type="text" name="busqueda" class="form-control">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
</div>
{{-- fin buscador --}}
             {{-- Salto de línea --}}
    <div class="row mt-3"></div>
             
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
                                            {{-- <form action="{{ route('auditorias.destroy', $auditoria) }}" method="POST" class="d-inline-block formulario-eliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button id="delete" name="delete" type="submit" class="btn btn-danger btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Eliminar Auditoría" onclick="return confirm('¿Estás seguro de eliminar?')">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </form> --}}
                                            {{--  --}}
                                            
                                            <form action="{{ route('auditorias.destroy', $auditoria) }}" method="POST"
                                            class="d-inline-block formulario-eliminar">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm shadow-none"
                                                data-toggle="tooltip" data-placement="top" title="Eliminar Auditoria"
                                                onclick="return confirmarEliminacion()">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </button>
                                        </form>
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
                    
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </div>
        </div>
    </div>
     
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.formulario-eliminar').submit(function (e) {
            e.preventDefault();

            var form = this; // Guardar una referencia al formulario actual

            confirmarEliminacion().then(function (result) {
                if (result.isConfirmed) {
                    // Enviar el formulario solo si el usuario confirma
                    form.submit();
                }
            });
        });

        function confirmarEliminacion() {
            return Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo'
            });
        }
    });
</script>

@endsection
