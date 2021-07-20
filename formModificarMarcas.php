
<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
require "funciones/conexion.php";
    require "funciones/marcas.php";
    $marca = seeMarcas();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar Marcas</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="modificarMarcas.php" method="post">
                <div class='form-group'>
                <label for="nomMarca">Nombre de la Marca</label>
                <input type="text" name="nomMarca" class='form-control' id="nomMarca" required value="<?=$marca["nomMarca"] ?>">
            
            
            </div>
            <input type="hidden" name="idMarca" value="<?=$marca["idMarca"] ?>">
            <button class='btn btn-info my-3 mr-3 px-4'>Modificar Marca</button>
            <a href="adminMarcas.php" class='btn btn-outline-info'>
            Volver al panel de Marcas
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>