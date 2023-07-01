@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            {{-- inicio alerta --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            {{-- fin alerta --}}
            {{-- danger --}}
            @if (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
                </div>
            @endif
            {{-- fin danger --}}

            {{-- inicio agregar --}}
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top"
                        title="Agregar Clientes" href="{{ route('clientes.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            {{-- fin agregar --}}
            {{-- Salto de línea --}}
            <div class="row mt-3"></div>

            {{-- buscador --}}
            {{-- <div class="d-md-flex justify-content-md-end">
                <form action="{{ route('clientes.index') }}" method="GET">
                    <div class="btn-group">
                        <input type="text" name="busqueda" class="form-control">
                        <input type="submit" name="enviar" class="btn btn-primary">
                        &nbsp;<a href="{{ route('clientes.eliminados') }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="">
                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div> --}}
            {{-- fin buscador --}}
             {{-- buscador --}}
<div class="d-md-flex justify-content-md-end">
    <form action="{{ route('clientes.index') }}" method="GET">
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
                @if (sizeof($clientes) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">RUT</th>
                                    <th scope="col">Dirección</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="text-center" width="20%">
                                            <a href="{{ route('clientes.show', $cliente) }}"
                                                class="btn btn-dark btn-sm shadow-none" data-toggle="tooltip"
                                                data-placement="top" title="Ver Cliente">
                                                <i class="fa fa-book fa-fw text-white"></i>
                                            </a>

                                            <a href="{{ route('clientes.edit', $cliente) }}"
                                                class="btn btn-primary btn-sm shadow-none" data-toggle="tooltip"
                                                data-placement="top" title="Editar Cliente">
                                                <i class="fa fa-pencil fa-fw text-white"></i>
                                            </a>

                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST"
                                                class="d-inline-block formulario-eliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm shadow-none"
                                                    data-toggle="tooltip" data-placement="top" title="Eliminar Cliente"
                                                    onclick="return confirmarEliminacion()">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </form>
                                            {{--  --}}

                                            {{--  --}}
                                        </td>
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->nombre_cliente }}</td>
                                        <td>{{ $cliente->email_cliente }}</td>
                                        <td>{{ $cliente->telefono_cliente }}</td>
                                        <td>{{ $cliente->rut_cliente }}</td>
                                        <td>{{ $cliente->direccion_cliente }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $clientes->links() !!}
                        </div>
                    </div>
                @else
                    <div class="alert alert-secondary">No se encontraron resultados.</div>
                @endif
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
