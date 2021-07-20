<?php

session_start();
require "funciones/autenticar.php";
        autenticar();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">

<h2 class="text-center pb-2">Agregar Tipo</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="agregarTipo.php" method="POST">
    
    
        <div class="form-group">
        
        <label for="nomTip">Nombre</label>
        <input type="text" name="nomTip" class="form-control" id="nomTip" required  >

        
        
        
        </div>


        <button class="btn btn-info">Agregar Tipo</button>
        <br>
        <a href="adminTipos.php" class="btn btn-outline-info mt-3">Volver al panel de Tipos</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>