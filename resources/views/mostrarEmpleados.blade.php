<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    
    <div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>FechaIngreso</th>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->idPrestamo}}</td>
                        <td>{{ $empleado->nombre}} {{$empleado->apellido}}</td>
                        <td>{{ $empleado->fechaIngreso}}</td>
                        <td>{{ $empleado->salario}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

            <br>
            <a href="{{route('inicio')}}" type="buttom" class="btn btn-warning">Inicio</a>
        </div>
    </div>
</body>
</html>