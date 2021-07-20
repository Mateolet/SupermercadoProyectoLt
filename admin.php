<?php

session_start();
require "funciones/autenticar.php";
        autenticar();

include "includes/header.html";
include "includes/nav.php";

?>




<main class="container">

<div class="list-group">

    <a href="adminTipos.php" class="list-group-item list-group-item-action ">Panel de administracion de Tipos</a>

    <a href="adminMarcas.php" class="list-group-item list-group-item-action ">Panel de administracion Marcas </a>

    <a href="adminPrecios.php" class="list-group-item list-group-item-action ">Panel de administracion de Precios</a>

    <a href="adminUsuarios.php" class="list-group-item list-group-item-action ">Panel de administracion de Usuarios</a>
</div>



</main>





<?php include "includes/footer.php" ?>