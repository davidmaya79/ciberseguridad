@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
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
                        <h5 class="mb-0">Editar Cliente</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre_cliente" class="font-weight-bold" style="font-size: 0.9rem;">Nombre</label>
                                <input type="text" name="nombre_cliente" class="form-control" value="{{ $cliente->nombre_cliente }}">
                                @error('nombre_cliente')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label for="email_cliente" class="font-weight-bold" style="font-size: 0.9rem;">Email</label>
                                <input type="email" name="email_cliente" class="form-control" value="{{ $cliente->email_cliente }}">
                                @error('email_cliente')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telefono_cliente" class="font-weight-bold" style="font-size: 0.9rem;">Teléfono</label>
                                <input type="text" name="telefono_cliente" class="form-control" value="{{ $cliente->telefono_cliente }}">
                                @error('telefono_cliente')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rut_cliente" class="font-weight-bold" style="font-size: 0.9rem;">RUT</label>
                                <input type="text" name="rut_cliente" class="form-control" value="{{ $cliente->rut_cliente }}">
                                @error('rut_cliente')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="direccion_cliente" class="font-weight-bold" style="font-size: 0.9rem;">Dirección</label>
                                <input type="text" name="direccion_cliente" class="form-control" value="{{ $cliente->direccion_cliente }}">
                                @error('direccion_cliente')
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
