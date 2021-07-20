<?php
session_start();
require "funciones/autenticar.php";
        autenticar();
    require "funciones/conexion.php";
    require "funciones/marcas.php";
    $marcas = selectMarcas();
    require "funciones/tipos.php";
    $tipos = listarTipos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Agregar Producto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="nomPrd">Nombre del Producto</label>
                    <input type="text" name="nomPrd"
                           class="form-control" id="nomPrd" required>
                </div>

                <label for="precioPrd">Precio del Producto</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="precioPrd"
                           class="form-control" id="precioPrd" min="0" step="0.01" required>
                </div>

                <div class="form-group mb-4">
                    <label for="idTipo">Tipos</label>
                    <select class="form-select" name="idTipo" id="idTipo" required>
                        <option value="">Tipos</option>
    <?php

    while($tipo = mysqli_fetch_assoc($tipos)){

   

?>
                
                        <option value="<?=$tipo["idTipo"] ?>"><?=$tipo["nomTip"] ?></option>


                          <?php

}
?>     
                    </select>
        
            
                </div>

                <div class="form-group mb-4">
                    <label for="idMarca">Marcas</label>
                    <select class="form-select" name="idMarca" id="idMarca" required>

                        <option value="">Seleccione una Marca</option>
        

        
                        <?php
    while($marca = mysqli_fetch_assoc($marcas)){

 

                ?>
        


                        <option value="<?=$marca["idMarca"]?>"><?=$marca["nomMarca"] ?></option>

                                <?php

}
                    ?>    

                    </select>

                </div>


                <div class="form-group mb-4">
                    <label for="stockPrd">Stock del Producto</label>
                    <input type="number" name="stockPrd" class="form-control" id="stockPrd" min="0" required>
                </div>

                <div class="custom-file mt-1 mb-4">
                   
                    <input type="file" name="imgPrd"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco">Seleccionar Archivo: </label>
                </div>

                <button class="btn btn-info mr-3 px-4">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-info">
                    Volver a panel de productos
                </a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>