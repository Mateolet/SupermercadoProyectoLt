    <?php

session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "componentes/imagenProducto.php";
    require "funciones/productos.php";
    $productos = listarPro();
    include "includes/nav.php";
    include "includes/header.html";



?>





    <main class="container">

    <h3>Panel de administracion de Tipos</h3>

    <a href="admin.php" class="btn btn-info my-2">
        Volver al panel
    </a>

    <a href="formAgregarProducto.php" class="btn btn-success ml-3">Agregar Producto</a>
    <div class="row row-cols-2">
<?php
while($producto = mysqli_fetch_assoc($productos)){

?>
    
    <div class="col border col-2 ml-2 mb-2">
    <?php
   echo  $imagen = imagen("productos/".$producto["imgPrd"]);

?>

    <h4 class=""><?=$producto["nomPrd"]?></h4>

    Precio:<span class="lead"> $<?=$producto["precioPrd"]?></span> 
    <br>
    Stock:<span class="lead"> <?=$producto["stockPrd"]?>u</span>  
    <br>
    Marca:<span class="lead"> <?=$producto["nomMarca"]?> </span>
    <br>
    Tipo: <span class="lead"> <?=$producto["nomTip"]?></span>
    <br>

    <a href="formModificarProducto.php?idProducto=<?=$producto["idProducto"] ?>" class="btn btn-outline-info mt-2">Modificar</a>
    <a href="formEliminarProducto.php?idProducto=<?= $producto["idProducto"] ?>"  class=" btn btn-outline-danger my-2">Eliminar</a>

      




    

    
    </div>
    
    <?php
}

?> 
  </div>

      
  


    <a href="admin.php" class="btn btn-info my-2"> Volver al Panel</a>
    </main>




<?php include "includes/footer.php" ?>
