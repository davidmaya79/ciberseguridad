<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auditoría PDF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 30px auto;
            max-width: 800px;
            padding: 20px;
            background-color: #f8f8f8;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .table {
            width: 100%;
            margin-bottom: 30px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
            font-weight: bold;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/cliente.jpg') }}" alt="Logo" class="logo">
        <h1>AUDITORÍA</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                     
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $auditoria->id }}</td>
                    <tr>
                        <th>Documentación</th>
                        <td>{{ $auditoria->documentacion_auditoria }}</td>
                    </tr>
                    
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

