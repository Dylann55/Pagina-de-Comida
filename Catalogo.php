<?php include("conexion.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="Fondo.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card-group text-center">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-light text-md-20">
                            <h2><b>REGISTRAR</b></h2>
                        </div>
                        <div class="card-body">
                            <form action="guardar.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control" REQUIRED id="id" name="id"
                                        placeholder="Ingrese ID...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" REQUIRED id="nombre" name="nombre"
                                        placeholder="Ingrese Nombre...">
                                </div>
                                <input type="file" class="form-control-file btn btn-outline-primary" REQUIRED id="exampleFormControlFile1" name="imagen">
                                <br><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" REQUIRED id="precio" name="precio"
                                        placeholder="Ingrese Precio...">
                                </div>
                                <div class="form-group">
                                    <select id="categoria" class="form-control" REQUIRED name="categoria">
                                        <option>Categoria1</option>
                                        <option>Categoria2</option>
                                        <option>Categoria3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="temporada" class="form-control" REQUIRED id="temporada" name="temporada"
                                        placeholder="Ingrese Temporada...">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="fechaingreso" REQUIRED id="fechaingreso" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i REQUIRED class="far fa-comments"></i></span>
                                        </div>
                                        <textarea name="descripcion" REQUIRED id="descripcion" class="form-control"
                                            rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit"
                                        class="btn btn-outline-primary btn-block"><b>Registrar</b></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center bg-primary text-light">
                            <h2><b>TABLA</b></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Temporada</th>
                                        <th>Fecha</th>
                                        <th colspan="3">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php include("Tabla.php")?>
                                <?php Mostrar()?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>