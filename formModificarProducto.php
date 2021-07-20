<?php
    session_start();
    require "funciones/autenticar.php";
            autenticar();
    require "funciones/conexion.php";
    require "funciones/marcas.php";
    $marcas = selectMarcas();
    require "funciones/tipos.php";
    $tipos = listarTipos();
    require "funciones/productos.php";
    $producto = seeProd();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Modificar Producto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="modificarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="nomPrd">Nombre del Producto</label>
                    <input type="text" name="nomPrd"
                           class="form-control" id="nomPrd" required value="<?=$producto["nomPrd"] ?>">

                </div>

                <label for="precioPrd">Precio del Producto</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="precioPrd"
                           class="form-control" id="precioPrd" min="0" step="0.01" required value="<?=$producto["precioPrd"] ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="idTipo">Tipos</label>
                    <select class="form-select" name="idTipo" id="idTipo" required value="<?=$producto["nomPrd"] ?>">
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
                    <input type="number" name="stockPrd" class="form-control" id="stockPrd" min="0" required value="<?=$producto["stockPrd"] ?>">
                </div>

                <div class="custom-file mt-1 mb-4">


                    Imagen Actual
                    <br>
                    <img src="productos/<?=$producto["imgPrd"] ?>" class="img-thumbnail my-2">
                <br>
                    <input type="file" name="imgPrd"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco">Seleccionar Archivo: </label>
                </div>

                <input type="hidden" name="idProducto" value="<?=$producto["idProducto"]?>">
                <input type="hidden" name="imgActual" value="<?=$producto["imgPrd"]?>">

                <button class="btn btn-info mr-3 px-4">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-info">
                    Volver a panel de productos
                </a>

            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>