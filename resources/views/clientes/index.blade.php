@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            {{--  inicio alerta--}}
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>  
            @endif
             
            {{-- fin alerta --}}
            
            {{-- inicio agregar --}}
            <div class="col-md-12">
                <div class="pull-right">
                    <a class="btn btn-primary shadow-none" data-toggle="tooltip" data-placement="top" title="Agregar Clientes" href="{{ route('clientes.create') }}"> 
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            {{-- fin agregar --}}
            <div class="col-md-12">
                @if(sizeof($clientes) > 0)
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
                            {{-- inicio vista --}}
                            @foreach($clientes as $cliente)
                            {{-- fin vista --}}
                            <tr>
                                <td class="text-center" width="20%">
                                    <a href="{{ route('clientes.show' , $cliente) }}" class="btn btn-primary btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Ver Cliente ">
                                        <i class="fa fa-book fa-fw text-white"></i></a>
                                    </a>
                                    <a href="{{ route('clientes.edit' , $cliente) }}" class="btn btn-success btn-sm shadow-none" 
                                            data-toggle="tooltip" data-placement="top" title="Editar Cliente">
                                        <i class="fa fa-pencil fa-fw text-white"></i></a>
                                    </a>
                                    <form action="{{ route('clientes.destroy' , $cliente) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button id="delete" name="delete" type="submit" 
                                                class="btn btn-danger btn-sm shadow-none" 
                                                data-toggle="tooltip" data-placement="top" title="Eliminar Cliente"
                                                onclick="return confirm('¿Estás seguro de eliminar?')">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </form>
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
                    {!!  $clientes->links() !!}
                    </div>
                </div>
                @else
                    <div class="alert alert-secondary">No se encontraron resultados.</div>
                @endif
                
                
                 
            </div>
           
        
        </div>
    </div>
@endsection