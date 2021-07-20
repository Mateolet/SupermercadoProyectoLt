

<?php





function selectMarcas(){

    $link = conectar();

    $sql = "SELECT idMarca, nomMarca
            FROM marcas";
   $resultado =  mysqli_query($link,$sql)
        or die(mysqli_error($link));

    return $resultado;
}


function addMarcas(){

    $nomMarca = $_POST["nomMarca"];


    $link = conectar();


    $sql = "INSERT INTO marcas
            VALUES 
            (DEFAULT, '".$nomMarca."')";

    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    return $resultado;

}


function seeMarcas(){


    $idMarca = $_GET["idMarca"];

    $link = conectar();

    $sql = "SELECT idMarca, nomMarca
            FROM marcas
            WHERE idMarca = ".$idMarca;

    $resultado = mysqli_query($link,$sql)
    or die(mysqli_error($link));

    $marca = mysqli_fetch_assoc($resultado);

    return $marca;

}





function modMarcas(){

    $idMarca = $_POST["idMarca"];

    $nomMarca = $_POST["nomMarca"];

    $link = conectar();

    $sql = "UPDATE marcas
            SET nomMarca = '".$nomMarca."'
            WHERE idMarca = ".$idMarca;

    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));


    return $resultado;

}



function verifiedMarca(){


    $idMarca = $_GET["idMarca"];


    $link = conectar();


    $sql = "SELECT 1 FROM productos
            WHERE idMarca = ".$idMarca;

    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));


    $cantidad = mysqli_fetch_row($resultado);


    return $cantidad;

}


function deleteMarcas(){


    $idMarca = $_POST["idMarca"];

    $link = conectar();
    

    $sql = "DELETE FROM marcas
            WHERE idMarca = ".$idMarca;

    
$resultado = mysqli_query($link,$sql)
or die(mysqli_error($link));

return $resultado;


}