<?php

session_start();
require "funciones/autenticar.php";
        autenticar();

    require "funciones/conexion.php";
    require "funciones/marcas.php";
    $cantidad = verifiedMarca();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">


<?php


if($cantidad > 0 ){



?>

<h2>No se puede eliminar la marca ya que tiene esta listada en productos.</h2>
    <h4>Eliminar el producto y despues la marca</h4>


<?php

}




else{

    $marca = seeMarcas();
?>


<h2 class="text-center pb-2">Eliminar Marca</h2>







<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="eliminarMarca.php" method="POST">
    
    
        <div class="form-group">
        
            <h2>Marca a eliminar</h2>
            Nombre : <span><?=$marca["nomMarca"] ?></span>
            <br>
            
        
            <input type="hidden" name="idMarca" value="<?=$marca["idMarca"]?>">
        
        </div>


        <button class="btn btn-danger">Eliminar Marca</button>

        <?php

}
?>
        <a href="adminMarcas.php" class="btn btn-outline-info ml-2">Volver al panel de Usuarios</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>