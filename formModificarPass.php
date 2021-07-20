
<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
require "funciones/conexion.php";
    require "funciones/usuarios.php";
    $usuario = seeUser();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar Pass</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="modificarPass.php" method="post">
                <div class='form-group'>
                <label for="passUsu">Password</label>
                <input type="password" name="passUsu" class='form-control' id="passUsu" required value="<?=$usuario["passUsu"] ?>">
            
            
            </div>
            <input type="hidden" name="idUsuario" value="<?=$usuario["idUsuario"] ?>">
            <button class='btn btn-info my-3 mr-3 px-4'>Modificar Pass</button>
            <a href="adminUsuarios.php" class='btn btn-outline-info'>
            Volver al panel de usuarios
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>