    <?php

session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "funciones/marcas.php";
    $marcas = selectMarcas();
    include "includes/nav.php";
    include "includes/header.html";



?>





    <main class="container">

    <h3>Panel de administracion de Marcas</h3>

    <a href="admin.php" class="btn btn-info my-2">
        Volver al panel
    </a>

    <table class="table table-bordered  table-hover">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">
                <a href="formAgregarMarca.php" class="btn btn-outline-success">Agregar</a>
            </th>
        </tr>
    </thead>

    <tbody> 

    <?php
while($marca = mysqli_fetch_assoc($marcas)){



?>
        <tr>
            <td><?=$marca["idMarca"]?></td>
            <td><?=$marca["nomMarca"] ?></td>
            <td><a href="formModificarMarcas.php?idMarca=<?=$marca["idMarca"] ?> " class="btn btn-outline-info">Modificar</a></td>
            <td><a href="formEliminarMarca.php?idMarca=<?=$marca["idMarca"] ?>" class="btn btn-outline-danger">Eliminar</a> </td>
        </tr>

        <?php
}


?>
    </tbody>

    </table>


    <a href="admin.php" class="btn btn-info my-2"> Volver al Panel</a>
    </main>





<?php include "includes/footer.php" ?>