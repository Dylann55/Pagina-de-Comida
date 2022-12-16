<?php
function Mostrar(){
    include("conexion.php");

    $query = "SELECT * FROM platos ";
    $resultado=$conn->query($query);

    while($row=$resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><img  height="100" weight="100"src="data:image/jpg;base64 ,<?php echo base64_encode($row['imagen']);?>" alt="imagen"/></td>
            <td><?php echo $row['precio']?></td>
            <td><?php echo $row['categoria']?></td>
            <td><?php echo $row['temporada']?></td>
            <td><?php echo $row['fechaingreso']?></td>
            <th><a href="ver.php?id=<?php echo $row['id'];?>" class="btn btn-outline-info">ver</a></th>
            <th><a href="modificar_articulo.php?id=<?php echo $row['id'];?>" class="btn btn-outline-warning">Modificar</a></th>
            <th><a href="eliminar.php?id=<?php echo $row['id'];?>" class="btn btn-outline-danger">Eliminar</a></th>
        </tr>
    <?php }
}
function Mostrar_Todo(){
    include("conexion.php");
        $id=$_REQUEST['id'];

        $query = "SELECT * FROM platos WHERE id='$id'";
        $resultado=$conn->query($query);

        while($row=$resultado->fetch_assoc()) { ?>
            <img src="data:image/jpg;base64 ,<?php echo base64_encode($row['imagen']);?>" height="300" weight="300" alt="imagen" class="card-img-top img-thumbnail">
            <div class="card-body">
                <h1 class="text-center">Datos</h1>
                <h5 class="card-title">ID</h5>
                <p class="card-text"><?php echo $row['id']?></p>
                <h5 class="card-title">Nombre</h5>
                <p class="card-text"><?php echo $row['nombre']?></p>
                <h5 class="card-title">Precio</h5>
                <p class="card-text"><?php echo $row['precio']?></p>
                <h5 class="card-title">Categoria</h5>
                <p class="card-text"><?php echo $row['categoria']?></p>
                <h5 class="card-title">Temporada</h5>
                <p class="card-text"><?php echo $row['temporada']?></p>
                <h5 class="card-title">Fecha</h5>
                <p class="card-text"><?php echo $row['fechaingreso']?></p>
                <h5 class="card-title">Descripcion</h5>
                <p class="card-text"><?php echo $row['descripcion']?></p>
            </div>
         <?php } 
}
?>