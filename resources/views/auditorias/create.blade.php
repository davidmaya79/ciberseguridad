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
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Agregar Auditoría</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('auditorias.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="descripcion_auditoria" class="font-weight-bold" style="font-size: 0.9rem;">Descripción</label>
                                <input type="text" name="descripcion_auditoria" class="form-control" value="{{ old('descripcion_auditoria') }}">
                                @error('descripcion_auditoria')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="documentacion_auditoria" class="font-weight-bold" style="font-size: 0.9rem;">Documentación</label>
                                <textarea name="documentacion_auditoria" class="form-control" rows="4">{{ old('documentacion_auditoria') }}</textarea>
                                @error('documentacion_auditoria')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de Inicio</label>
                                <input type="date" name="fecha_inicio" class="form-control" value="{{ old('fecha_inicio') }}">
                                @error('fecha_inicio')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_fin" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de Fin</label>
                                <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin') }}">
                                @error('fecha_fin')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            {{-- auditoria --}}
                            <div class="col-md-6">
                                <label for="cliente_id" class="form-label">Cliente</label>
                                <select id="cliente_id" class="form-select shadow-none" name="cliente_id" value="{{ old('cliente_id') }}">
                                    <option value="" selected>Seleccionar...</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                            {{ $cliente->nombre_cliente }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('cliente_id')
                                    <small class="text-danger" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            {{-- fin auditoria --}}
                            {{-- empleado --}}
                            <div class="col-md-6">
                                <label class="form-label">Empleados</label>
                                @foreach ($empleados as $empleado)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="auditorias_empleados[]" value="{{ $empleado->id }}" id="empleado_{{ $empleado->id }}" {{ (is_array(old('auditorias_empleados')) && in_array($empleado->id, old('auditorias_empleados'))) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="empleado_{{ $empleado->id }}">
                                            {{ $empleado->nombre_empleado }}
                                        </label>
                                    </div>
                                @endforeach
                                @error('auditorias_empleados')
                                    <small class="text-danger" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            {{-- fin empleado --}}
                            {{-- empleado 2--}}
                            {{-- <div class="col-md-6">
                                <label class="form-label">Empleados</label>
                                @foreach ($empleados as $empleado)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="auditorias_empleados[]" value="{{ $empleado->id }}" id="empleado_{{ $empleado->id }}" {{ in_array($empleado->id, old('auditorias_empleados', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="empleado_{{ $empleado->id }}">
                                            {{ $empleado->nombre_empleado }}
                                        </label>
                                    </div>
                                @endforeach
                                @error('auditorias_empleados')
                                    <small class="text-danger" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> --}}
                            
                            {{-- fin empleado 2--}}
                            {{--  --}}
                            
                            {{--  --}}
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
