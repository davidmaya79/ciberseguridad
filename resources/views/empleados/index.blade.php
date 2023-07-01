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
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Empleado" href="{{ route('empleados.create') }}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            {{-- Fin agregar --}}
               {{-- Salto de línea --}}
    <div class="row mt-3"></div>

    {{-- buscador --}}
    <div class="d-md-flex justify-content-md-end">
       <form action = "{{ route('empleados.index') }}" method="GET">
           <div class="btn-group">
               <input type="text" name="busqueda" class="form-control">
               <input type="submit" name="enviar" class="btn btn-primary">
           </div>
       </form>
       </div>
    {{-- fin buscador --}}
    
            <div class="col-md-12">
                @if (sizeof($empleados) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">RUT</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Puesto</th>
                                    
                                </tr>
                                 
                            </thead>
                             
                             
                            <tbody>
                                @foreach ($empleados as $empleado)
                                    <tr>
                                        <td class="text-center" width="20%">
                                            <a href="{{ route('empleados.show', $empleado) }}" class="btn btn-dark btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Ver Empleado">
                                                <i class="fa fa-book fa-fw text-white"></i>
                                            </a>
                                            <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-primary btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Editar Empleado">
                                                <i class="fa fa-pencil fa-fw text-white"></i>
                                            </a>
                                            {{-- <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button id="delete" name="delete" type="submit" class="btn btn-danger btn-sm shadow-none" data-toggle="tooltip" data-placement="top" title="Eliminar Empleado" onclick="return confirm('¿Estás seguro de eliminar?')">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                </button>
                                            </form> --}}
                                            {{-- f2 --}}
                                            <form action="{{ route('empleados.destroy', $empleado) }}" method="POST"
                                            class="d-inline-block formulario-eliminar">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm shadow-none"
                                                data-toggle="tooltip" data-placement="top" title="Eliminar Empleado"
                                                onclick="return confirmarEliminacion()">
                                                <i class="fa fa-trash-o fa-fw"></i>
                                            </button>
                                        </form>
                                            {{-- end f2 --}}
                                        </td>
                                        <td>{{ $empleado->id }}</td>
                                        <td>{{ $empleado->nombre_empleado }}</td>
                                        <td>{{ $empleado->apellido_empleado }}</td>
                                        <td>{{ $empleado->rut_empleado }}</td>
                                        <td>{{ $empleado->email_empleado }}</td>
                                        <td>{{ $empleado->telefono_empleado }}</td>
                                        <td>{{ $empleado->puesto_empleado }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $empleados->links() !!}
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
