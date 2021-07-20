<?php  
session_start();
require "funciones/autenticar.php";
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = deleteUsu();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Eliminación de un Usuario</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo eliminar el Usuario.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Usuario Eliminado correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminUsuarios.php" class="btn btn-outline-info">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>