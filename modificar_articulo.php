<?php
    include("conexion.php");

    $id=$_REQUEST['id'];
            
    $query = "SELECT * FROM platos WHERE id='$id'";
    $resultado=$conn->query($query);
    $row=$resultado->fetch_assoc()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Articulo</title>
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
                            <h2><b>Modificar</b></h2>
                        </div>
                        <div class="card-body">
                            <form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST"
                                enctype="multipart/form-data">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese Nombre..." value="<?php echo $row['nombre'];?>">
                                </div>
                                <input type="file" class="form-control-file btn btn-outline-primary"
                                    id="exampleFormControlFile1" name="imagen">
                                <br><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="precio" name="precio"
                                        placeholder="Ingrese Precio..." value="<?php echo $row['precio'];?>">
                                </div>
                                <div class="form-group">
                                    <select id="categoria" class="form-control" name="categoria">
                                        <option value="Categoria1">Categoria1</option>
                                        <option value="Categoria2">Categoria2</option>
                                        <option value="Categoria3">Categoria3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="temporada" class="form-control" id="temporada" name="temporada"
                                        placeholder="Ingrese Temporada...">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="fechaingreso" id="fechaingreso" class="form-control"
                                        value="<?php echo $row['fechaingreso'];?>">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-comments"></i></span>
                                        </div>
                                        <textarea name="descripcion" id="descripcion" class="form-control" rows="2"
                                            value="<?php echo $row['descripcion'];?>"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-primary btn-block"
                                        value="aceptar"><b>Modificar</b></button>
                                    <button type="button" class="btn btn-outline-primary btn-block"><a href="Catalogo.php"><b>Regresar</b></a></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>