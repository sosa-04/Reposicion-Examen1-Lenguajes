<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    
    <div>
        <center><h1>Agregar Empleado</h1></center>
        <div class="container">
            <form action="{{route('empleados.guardar')}}" method="POST">
                @csrf

                <div>
                    <label for="descripcion">Id Empleado:</label><br>
                    <input type="text" name="id">
                </div><br>
                <div>
                    <label for="precio">nombre:</label><br>
                    <input type="text" name="nombre">
                </div><br>
                <div>
                    <label for="precio">Apellido:</label><br>
                    <input type="text" name="apellido">
                </div><br>
                <div>
                    <label for="pagaIsv">Fecha Ingreso:</label><br>
                    <input type="date" name="fechaIngreso">
                </div><br>
                <div>
                    <label for="pagaIsv">Salario:</label><br>
                    <input type="number" name="salario">
                </div><br>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</body>
</html>