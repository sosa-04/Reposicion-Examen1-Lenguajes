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
        <center><h1>Agregar Producto</h1></center>
        <div class="container">
            <form action="{{route('productos.guardar')}}" method="POST">
                @csrf

                <div>
                    <label for="descripcion">Id Proveedor:</label><br>
                    <input type="text" name="id">
                </div><br>
                <div>
                    <label for="precio">Nombre:</label><br>
                    <input type="text" name="nombre">
                </div><br>
                <div>
                    <label for="pagaIsv">Fecha Registro:</label><br>
                    <input type="date" name="fechaRegistro">
                </div><br>
                <div>
                    <label for="precio">Telefono:</label><br>
                    <input type="text" name="telefono">
                </div><br>
                <div>
                    <label for="precio">Correo:</label><br>
                    <input type="text" name="correo">
                </div><br>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</body>
</html>