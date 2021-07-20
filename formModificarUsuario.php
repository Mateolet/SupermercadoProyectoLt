<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
require "funciones/conexion.php";
require "funciones/usuarios.php";
$usuario = seeUser();

include "includes/header.html";
include "includes/nav.php";

?>



<main class="container">

<h2 class="text-center pb-2">Modificar  Usuario</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="modificarUsuarios.php" method="POST">
    
    
        <div class="form-group">
        
        <label for="nomUsuario">Nombre</label>
        <input type="text" name="nomUsuario" class="form-control" id="nomUsuario" required 
            value="<?=$usuario["nomUsuario"] ?>" >
         <br>
        <label for="apeUsuario">Apellido</label>
        <input type="text" name="apeUsuario" class="form-control" id="apeUsuario" required
                 value="<?=$usuario["apeUsuario"] ?>"  >
        <br>
        <label for="emailUsuario">Email</label>
        <input type="email" name="emailUsuario" class="form-control" id="emailUsuario" required 
        value="<?=$usuario["emailUsuario"] ?>" >
        <br>
        
        
        </div>

        <input type="hidden" name="idUsuario" value="<?=$usuario["idUsuario"] ?>">

        <button class="btn btn-info">Modificar Usuario</button>
        <br>
        <a href="adminUsuarios.php" class="btn btn-outline-info mt-3">Volver al panel de Usuarios</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>