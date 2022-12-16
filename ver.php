<?php include("conexion.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="Fondo.css">

</head>

<body>
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <?php include("Tabla.php")?>
                <?php Mostrar_Todo()?>
                <div class="card-body text-center">
                <button type="button" class="btn btn-outline-primary btn-block"><a href="Catalogo.php">Regresar</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
