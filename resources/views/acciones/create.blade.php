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
                        <h5 class="mb-0">Agregar Acción</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('acciones.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="auditoria_id" class="font-weight-bold" style="font-size: 0.9rem;">Auditoría</label>
                                <select id="auditoria_id" class="form-control" name="auditoria_id">
                                    <option value="" selected>Seleccionar...</option>
                                    @foreach ($auditorias as $auditoria)
                                        <option value="{{ $auditoria->id }}">{{ $auditoria->cliente->nombre_cliente }}</option>
                                    @endforeach
                                </select>
                                @error('auditoria_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="responsable_acciones" class="font-weight-bold" style="font-size: 0.9rem;">Responsable de Acciones</label>
                                <input type="text" name="responsable_acciones" class="form-control" value="{{ old('responsable_acciones') }}">
                                @error('responsable_acciones')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="descripcion_acciones" class="font-weight-bold" style="font-size: 0.9rem;">Descripción</label>
                                <input type="text" name="descripcion_acciones" class="form-control" value="{{ old('descripcion_acciones') }}">
                                @error('descripcion_acciones')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_implementacion" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de Implementación</label>
                                <input type="date" name="fecha_implementacion" class="form-control" value="{{ old('fecha_implementacion') }}">
                                @error('fecha_implementacion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                             {{-- empleado --}}
                             {{-- <div class="form-group">
                                <label for="empleado_id">Empleado</label>
                                <select class="form-control" id="empleado_id" name="empleado_id">
                                    <option value="" selected>Seleccionar empleado</option>
                                    @foreach ($empleados as $empleado)
                                        <option value="{{ $empleado->id }}">{{ $empleado->nombre_empleado }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            
                            {{-- fin empleado --}}
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
