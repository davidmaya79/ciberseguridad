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
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Agregar Empleados</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('empleados.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Nombre</label>
                                <input type="text" name="nombre_empleado" class="form-control" value="{{ old('nombre_empleado') }}">
                                @error('nombre_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="apellido_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Apellido</label>
                                <input type="text" name="apellido_empleado" class="form-control" value="{{ old('apellido_empleado') }}">
                                @error('apellido_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="rut_empleado" class="font-weight-bold" style="font-size: 0.9rem;">RUT</label>
                                <input type="text" name="rut_empleado" class="form-control" value="{{ old('rut_empleado') }}">
                                @error('rut_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="email_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Email</label>
                                <input type="email" name="email_empleado" class="form-control" value="{{ old('email_empleado') }}">
                                @error('email_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Teléfono</label>
                                <input type="text" name="telefono_empleado" class="form-control" value="{{ old('telefono_empleado') }}">
                                @error('telefono_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="puesto_empleado" class="font-weight-bold" style="font-size: 0.9rem;">Puesto</label>
                                <input type="text" name="puesto_empleado" class="form-control" value="{{ old('puesto_empleado') }}">
                                @error('puesto_empleado')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            </div>
                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
