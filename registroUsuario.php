<?php  

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = addUsu();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un Usuario</h1>


    <?php

    $css = "danger";
    $mensaje = "No se pudo agregar el usuario.";

    if($chequeo)
    {
        $css = "success";
        $mensaje = "Usuario registrado correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>