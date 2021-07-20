<?php  

  
	require "funciones/conexion.php";
    require "funciones/productos.php";
    require "componentes/imagenProducto.php";
    $productos = listarPro();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catalogo de Productos</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
<?php
while($producto = mysqli_fetch_assoc($productos)){


?>
<div class="card col ml-2 mb-2">
<?php
   echo  $imagen = imagen("productos/".$producto["imgPrd"]);

?>
    
    <div class="card-body ">
        <h4><?=$producto["nomPrd"] ?></h4>
        <br>
        Precio: <span class="lead"><?=$producto["precioPrd"] ?></span>
        <br>
        Marca: <span class="lead"><?=$producto["nomMarca"] ?></span> 
        <br>
      Tipo: <span class="lead"><?=$producto["nomTip"] ?></span> 

    </div>
</div>

<?php
}
?>
</div>


       
    </main>

<?php  include 'includes/footer.php';  ?>