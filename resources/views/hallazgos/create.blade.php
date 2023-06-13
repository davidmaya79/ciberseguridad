@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('hallazgos.index') }}"> 
                        <i class="fa fa-home fa-fw"></i> 
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Agregar Hallazgo</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('hallazgos.store') }}" method="POST">
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
                                <label for="descripcion_hallazgo" class="font-weight-bold" style="font-size: 0.9rem;">Descripción</label>
                                <input type="text" name="descripcion_hallazgo" class="form-control" value="{{ old('descripcion_hallazgo') }}">
                                @error('descripcion_hallazgo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_deteccion" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de Detección</label>
                                <input type="date" name="fecha_deteccion" class="form-control" value="{{ old('fecha_deteccion') }}">
                                @error('fecha_deteccion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="clasificacion_hallazgo" class="font-weight-bold" style="font-size: 0.9rem;">Clasificación</label>
                                <input type="text" name="clasificacion_hallazgo" class="form-control" value="{{ old('clasificacion_hallazgo') }}">
                                @error('clasificacion_hallazgo')
                                    <small class="text-danger">{{ $message }}</small>
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
