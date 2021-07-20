<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "funciones/productos.php";
    $producto = seeProd();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">
<article class="card border-danger col-6 mx-auto">
<div class="row">
                <div class="col">
                    <img src="productos/<?=$producto["imgPrd"]?>" class="img-thumbnail">
                </div>
                <div class="col  align-texts-center">
               
                <h4 class="text-center"><?=$producto["nomPrd"]?></h4>
                <br>
               Tipo: <?=$producto["nomTip"] ?> || Marca: <?=$producto["nomMarca"] ?>
                <br>
                Precio: $<?=$producto["precioPrd"] ?> || Stock: <?=$producto["stockPrd"] ?>
                <br>

               



                <form action="eliminarProducto.php" method="POST">
                 
                    <input type="hidden" name="idProducto" value="<?=$producto["idProducto"]?>">   
                 
                    <button class="btn btn-danger btn-block my-3">
                        Confirmar Baja
                
                    </button>
                    <a href="adminProductos.php" class="btn btn-outline-info btn-block mb-2">
                        Volver a Panel
                    </a>  
                  
                    
                    
                        
                </form>
                </div>
            </div>
        </article>


</main>






<?php include "includes/footer.php" ?>