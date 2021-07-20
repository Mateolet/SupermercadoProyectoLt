
<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
require "funciones/conexion.php";
    require "funciones/tipos.php";
    $tipo = seeTipos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar Tipos</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="modificarTipos.php" method="post">
                <div class='form-group'>
                <label for="nomTip">Nombre de la categoria</label>
                <input type="text" name="nomTip" class='form-control' id="nomTip" required value="<?=$tipo["nomTip"] ?>">
            
            
            </div>
            <input type="hidden" name="idTipo" value="<?=$tipo["idTipo"] ?>">
            <button class='btn btn-info my-3 mr-3 px-4'>Modificar Tipos</button>
            <a href="adminTipos.php" class='btn btn-outline-info'>
            Volver al panel de Tipos
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>