<?php
include("conexion.php");

$id=$_REQUEST['id'];

$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$temporada=$_POST['temporada'];
$fecha=$_POST['fechaingreso'];
$descripcion=$_POST['descripcion'];

$query="UPDATE platos SET nombre='$nombre', imagen='$imagen',precio='$precio',
categoria='$categoria', temporada='$temporada', fechaingreso='$fecha',
descripcion='$descripcion'
WHERE id ='$id'";
$resultado=$conn->query($query);

if($resultado){
    header("Location:Catalogo.php");
}else{
    echo 'no se inserto';
}

?>