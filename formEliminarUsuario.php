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

<h2 class="text-center pb-2">Agregar un Usuario</h2>




<div class='alert bg-light p-4 col-8 mx-auto border shadow-sm '>


    <form action="eliminarUsuario.php" method="POST">
    
    
        <div class="form-group">
        
            <h2>Usuario a eliminar</h2>
            Nombre : <span><?=$usuario["nomUsuario"] ?></span>
            <br>
            Email : <span><?=$usuario["emailUsuario"] ?></span>
        
            <input type="hidden" name="idUsuario" value="<?=$usuario["idUsuario"]?>">
        
        </div>


        <button class="btn btn-danger">Eliminar Usuario</button>
        <a href="adminUsuarios.php" class="btn btn-outline-info ml-2">Volver al panel de Usuarios</a>
    </form>


<div>



</main>






<?php include "includes/footer.php" ?>