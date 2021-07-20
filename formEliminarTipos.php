<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "funciones/tipos.php";
    $cantidad = verifiedTipos();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">


<?php

if($cantidad > 0 )
{
?>
    <h3>No se puede eliminar ya que tiene productos relacionados</h3>
    <br>
    <h4>Elimine el producto para poder borrarlo</h4>

<?php

}




else {

$tipos = seeTipos();
?>



<h2 class="text-center pb-2">Eliminar tipos</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="eliminarTipos.php" method="POST">
    
    
        <div class="form-group">
        
            <h2>Tipos a eliminar</h2>
            Nombre : <span><?=$tipos["nomTip"] ?></span>
            <br>
           
        
            <input type="hidden" name="idTipo" value="<?=$tipos["idTipo"]?>">
        
        </div>


        <button class="btn btn-danger">Eliminar tipo</button>


       <?php
       
}
       ?>
        <a href="adminTipos.php" class="btn btn-outline-info ml-2">Volver al panel de Tipos</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>