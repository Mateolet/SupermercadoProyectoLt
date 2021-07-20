<?php  
session_start();
require "funciones/autenticar.php";
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = addpro();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un Producto</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo agregar el Producto.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Producto agregado correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminProductos.php" class="btn btn-outline-secondary">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>