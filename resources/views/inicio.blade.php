<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <br>
    <div class="container">
        <div>
            <a href="{{route('productos.crear')}}" type="buttom" class="btn btn-success">Agregar Producto</a>
            <a href="{{route('empleados.crear')}}" type="buttom" class="btn btn-success">Agregar Empleado</a>
            <a href="{{route('proveedores.crear')}}" type="buttom" class="btn btn-success">Agregar Proveedor</a>
        </div>
    </div>
</body>
</html>