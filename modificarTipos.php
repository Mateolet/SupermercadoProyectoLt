<?php  
session_start();
require "funciones/autenticar.php";
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/tipos.php';
    $chequeo = modTipos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de Tipos</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo agregar el tipo.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Tipos agregado correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminTipos.php" class="btn btn-outline-info">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>