<?php


session_start();
require "funciones/autenticar.php";
        autenticar();
include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">

<h2 class="text-center pb-2">Agregar una Marca</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="agregarMarca.php" method="POST">
    
    
        <div class="form-group">
        
        <label for="nomMarca">Nombre</label>
        <input type="text" name="nomMarca" class="form-control" id="nomMarca" required  >

        
        
        
        </div>


        <button class="btn btn-info">Agregar Marca</button>
        <br>
        <a href="adminMarcas.php" class="btn btn-outline-info mt-3">Volver al panel de Marcas</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>