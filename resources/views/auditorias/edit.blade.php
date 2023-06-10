@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
             {{--  inicio alerta--}}
             @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                </div>  
             @endif
              
             {{-- fin alerta --}}
              {{--  inicio alerta--}}
              @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
              </div>  
            @endif
            
           {{-- fin alerta --}}
             
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Inicio" href="{{ route('clientes.index') }}"> 
                        <i class="fa fa-home fa-fw"></i> 
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header bg-dark text-light">
                        <h5 class="mb-0">Editar Auditoria</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('auditorias.update', $auditoria->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="descripcion_auditoria" class="font-weight-bold" style="font-size: 0.9rem;">Descripción</label>
                                <input type="text" name="descripcion_auditoria" class="form-control" value="{{ old('descripcion_auditoria', $auditoria->descripcion_auditoria) }}">
                                @error('descripcion_auditoria')
                                <small class="text-danger" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="documentacion_auditoria" class="font-weight-bold" style="font-size: 0.9rem;">Documentación</label>
                                <input type="text" name="documentacion_auditoria" class="form-control" value="{{ old('documentacion_auditoria', $auditoria->documentacion_auditoria) }}">
                                @error('documentacion_auditoria')
                                <small class="text-danger" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de inicio</label>
                                <input type="date" name="fecha_inicio" class="form-control" value="{{ old('fecha_inicio', $auditoria->fecha_inicio) }}">
                                @error('fecha_inicio')
                                <small class="text-danger" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fecha_fin" class="font-weight-bold" style="font-size: 0.9rem;">Fecha de fin</label>
                                <input type="date" name="fecha_fin" class="form-control" value="{{ old('fecha_fin', $auditoria->fecha_fin) }}">
                                @error('fecha_fin')
                                <small class="text-danger" role="alert">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cliente_id" class="font-weight-bold" style="font-size: 0.9rem;">Cliente</label>
                                <select name="cliente_id" class="form-control">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}" {{ $auditoria->cliente_id == $cliente->id ? 'selected' : '' }}>
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
