<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Reportes de Clientes</title>
  </head>
  <body>
     
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
    
  </body>
</html>