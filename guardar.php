<?php
include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$temporada=$_POST['temporada'];
$fecha=$_POST['fechaingreso'];
$descripcion=$_POST['descripcion'];

$query="INSERT INTO platos(id,nombre,imagen,precio,categoria,temporada,fechaingreso,descripcion) 
VALUES('$id','$nombre','$imagen','$precio','$categoria','$temporada','$fecha','$descripcion')";
$resultado=$conn->query($query);

if($resultado){
    header("Location:catalogo.php");
}else{
    echo 'no se inserto';
}
$conn->close();
?>                                                                                                                       