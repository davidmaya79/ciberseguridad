 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  {{-- estilos --}}
<style>
.cabecera {
  background-color: black;
  color: white;
}

h1 {
  color: blueviolet;
}
</style>
  {{--  --}}
 </head>
 <body>
  <img src="{{ asset('images/cliente.jpg') }}" alt="Haker" width="60px" class="haker-image">
  <h1 class="text-center">CLIENTES</h1><br>
  <table class="table" style="text-align: center;font-size: 16px">
    <thead class="cabecera">
    <tr>
        {{-- <th scope="col">Acciones</th> --}}
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
            {{-- <td class="text-center" width="20%"> --}}
                
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
 </body>
 </html>