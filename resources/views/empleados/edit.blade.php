@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Inicio de alerta --}}
            @if (session('mensajedeadvertencia'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('mensajedeadvertencia') }}
                </div>
            @endif

            {{-- Fin de alerta --}}
            {{-- Inicio de alerta --}}
            @if (session('mensajedeexito'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('mensajedeexito') }}
                </div>
            @endif

            {{-- Fin de alerta --}}
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('empleados.index') }}"> 
                        <i class="fa fa-home fa-fw"></i> 
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Editar Empleado</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Nombre</label>
                                <input type="text" name="nombre_empleado" class="form-control" value="{{ old('nombre_empleado', $empleado->nombre_empleado) }}">
                                @error('nombre_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="apellido_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Apellido</label>
                                <input type="text" name="apellido_empleado" class="form-control" value="{{ old('apellido_empleado', $empleado->apellido_empleado) }}">
                                @error('apellido_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rut_empleado" class="font-weight-bold" style="font-size: 0.9rem;">RUT</label>
                                <input type="text" name="rut_empleado" class="form-control" value="{{ old('rut_empleado', $empleado->rut_empleado) }}">
                                @error('rut_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Email</label>
                                <input type="email" name="email_empleado" class="form-control" value="{{ old('email_empleado', $empleado->email_empleado) }}">
                                @error('email_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Teléfono</label>
                                <input type="text" name="telefono_empleado" class="form-control" value="{{ old('telefono_empleado', $empleado->telefono_empleado) }}">
                                @error('telefono_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="puesto_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Puesto</label>
                                <input type="text" name="puesto_empleado" class="form-control" value="{{ old('puesto_empleado', $empleado->puesto_empleado) }}">
                                @error('puesto_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
