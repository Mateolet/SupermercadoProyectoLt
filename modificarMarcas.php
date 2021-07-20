<?php  
session_start();
require "funciones/autenticar.php";
        autenticar();
        
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = modMarcas();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una Marca</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo modificar la Marca.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Marca Modificada correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminMarcas.php" class="btn btn-outline-info">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>