<?php  
session_start();
require "funciones/autenticar.php";
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modPass();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de las Pass</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo modificar la Pass.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Pass Modificada correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminUsuarios.php" class="btn btn-outline-info">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>