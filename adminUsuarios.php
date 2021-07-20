    <?php

session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "funciones/usuarios.php";
    $usuarios = listarUsu();
    include "includes/nav.php";
    include "includes/header.html";



?>





    <main class="container">

    <h3>Panel de administracion de Usuarios</h3>

    <a href="admin.php" class="btn btn-info my-2">
        Volver al panel
    </a>

    <table class="table table-bordered  table-hover">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">
                <a href="formAgregarUsuario.php" class="btn btn-outline-success">Agregar</a>
            </th>
        </tr>
    </thead>

    <tbody> 

    <?php
while($usuario = mysqli_fetch_assoc($usuarios)){



?>
        <tr>
            <td><?=$usuario["idUsuario"]?></td>
            <td><?=$usuario["nomUsuario"] ?></td>
            <td><?=$usuario["apeUsuario"] ?></td>
            <td><?=$usuario["emailUsuario"] ?></td>
            <td><a href="formModificarUsuario.php?idUsuario=<?=$usuario["idUsuario"] ?> " class="btn btn-outline-info">Modificar</a></td>
            <td><a href="formEliminarUsuario.php?idUsuario=<?= $usuario["idUsuario"]?>" class="btn btn-outline-danger">Eliminar</a> </td>
            <td><a href="formModificarPass.php?idUsuario=<?= $usuario["idUsuario"]?>" class="btn btn-info">ModificarPass</a> </td>
        </tr>

        <?php
}


?>
    </tbody>

    </table>


    <a href="admin.php" class="btn btn-info my-2"> Volver al Panel</a>
    </main>





<?php include "includes/footer.php" ?>