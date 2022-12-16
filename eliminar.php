<?php
include("conexion.php");

$id=$_REQUEST['id'];

$query="DELETE FROM platos WHERE id ='$id'";
$resultado=$conn->query($query);

if($resultado){
    header("Location:Catalogo.php");
}else{
    echo 'no se inserto';
}
$conn->close();

?>