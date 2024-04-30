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
                    <label for="descripcion">Descripcion:</label><br>
                    <input type="text" name="descripcion">
                </div><br>
                <div>
                    <label for="precio">Precio:</label><br>
                    <input type="number" name="precio">
                </div><br>
                <div>
                    <label for="stock">Stock:</label><br>
                    <input type="number" name="stock">
                </div><br>
                <div>
                    <label for="pagaIsv">Isv:</label><br>
                    <input type="number" name="Isv">
                </div><br>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</body>
</html>