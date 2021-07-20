<?php

session_start();
require "funciones/autenticar.php";
        autenticar();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">

<h2 class="text-center pb-2">Agregar un Usuario</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="agregarUsuario.php" method="POST">
    
    
        <div class="form-group">
        
        <label for="nomUsuario">Nombre</label>
        <input type="text" name="nomUsuario" class="form-control" id="nomUsuario" required  >
         <br>
        <label for="apeUsuario">Apellido</label>
        <input type="text" name="apeUsuario" class="form-control" id="apeUsuario" required  >
        <br>
        <label for="emailUsuario">Email</label>
        <input type="email" name="emailUsuario" class="form-control" id="emailUsuario" required  >
        <br>
        <label for="passUsu">Password</label>
        <input type="password" name="passUsu" class="form-control" id="passUsu" required  >
        
        
        
        </div>


        <button class="btn btn-info">Agregar Usuario</button>
        <br>
        <a href="adminUsuarios.php" class="btn btn-outline-info mt-3">Volver al panel de Usuarios</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>