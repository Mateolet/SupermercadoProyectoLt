<?php



function listarTipos(){

    $link = conectar();

    $sql = "SELECT idTipo, nomTip FROM tipos";

    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));

    return $resultado;
}



function addTipos(){

    $tipNom = $_POST["nomTip"];

    $link = conectar();


    $sql = "INSERT INTO tipos
            VALUES 
            (DEFAULT, '".$tipNom."')";

    $resultado = mysqli_query($link,$sql)
    or die(mysqli_error($link));

    return $resultado;  

}




function seeTipos(){

    $idTipo = $_GET["idTipo"];

    $link = conectar();

    $sql = "SELECT idTipo,nomTip 
                FROM tipos
            WHERE idTipo = ".$idTipo;

    
    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    $tipo = mysqli_fetch_assoc($resultado);

    return $tipo;
}


function modTipos(){

 $idTipo= $_POST["idTipo"];
   $nomTip= $_POST["nomTip"];

   $link = conectar();

   $sql = "UPDATE tipos
            SET nomTip = '".$nomTip."'
            WHERE idTipo = ".$idTipo;

    $resultado = mysqli_query($link ,$sql )
            or die(mysqli_error($link));

    return $resultado;



}


function verifiedTipos(){

    $idTipo = $_GET["idTipo"];


    $link = conectar();


    $sql = "SELECT 1 from productos
            WHERE idTipo = ".$idTipo;

    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    $cantidad = mysqli_fetch_row($resultado);

    return $cantidad;

}


function deleteTipos(){

    $idTipo = $_POST["idTipo"];


    $link = conectar();


    $sql = "DELETE FROM tipos
            WHERE idTipo = ".$idTipo;

$resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

        return $resultado;

}