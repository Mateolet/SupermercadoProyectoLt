


<?php




function listarUsu(){


    $link = conectar();

    $sql = "SELECT idUsuario, nomUsuario, apeUsuario, emailUsuario
                 FROM usuarios";


    $resultado = mysqli_query($link,$sql)
                or die(mysqli_error($link));


    return $resultado;

}



function addUsu(){

    $nomUsuario = $_POST["nomUsuario"];
    $apeUsuario = $_POST["apeUsuario"];
    $emailUsuario = $_POST["emailUsuario"];
    $passUsu = $_POST["passUsu"];

    $link = conectar();

    $sql = "INSERT INTO usuarios
            VALUES 
            (DEFAULT,'".$nomUsuario."',
            '".$apeUsuario."',
           '".$emailUsuario."',
           '".$passUsu."')";

    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    return $resultado;
}



function seeUser(){

    $idUsuario = $_GET["idUsuario"];

    $link = conectar();

    $sql = "SELECT idUsuario, nomUsuario, apeUsuario, emailUsuario
            FROM usuarios
            WHERE idUsuario = ".$idUsuario;

    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));

    $usuario = mysqli_fetch_assoc($resultado);

    return $usuario;
}



function modUser(){

    $idUsuario = $_POST["idUsuario"];
    $nomUsuario = $_POST["nomUsuario"];
    $apeUsuario = $_POST["apeUsuario"];
    $emailUsuario = $_POST["emailUsuario"];
   

    $link = conectar();

    $sql = "UPDATE usuarios
            SET nomUsuario = '".$nomUsuario."',
            apeUsuario = '".$apeUsuario."',
            emailUsuario = '".$emailUsuario."'
            WHERE idUsuario = ".$idUsuario;

    
    $resultado = mysqli_query($link,$sql)
    or die(mysqli_error($link));
    
    return $resultado;
    
}



function deleteUsu(){

    $idUsuario = $_POST["idUsuario"];


    $link = conectar();

    $sql = "DELETE FROM usuarios 
            WHERE idUsuario = ".$idUsuario;

    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));

    return $resultado;
}



function seeContra(){

    $idUsuario = $_GET["idUsuario"];


    $link = conectar();


    $sql = "SELECT passUsu, idUsuario from usuarios
            WHERE idUsuario = ".$idUsuario;


    $resultado = mysqli_query($link,$sql)
    or die(mysqli_error($link));

    $usuario = mysqli_fetch_assoc($resultado);


    return $usuario;




}


function modPass(){

    $passUsu = $_POST["passUsu"];
    $idUsuario = $_POST["idUsuario"];

    
    $link = conectar();


    $sql = "UPDATE usuarios
            SET passUsu = '".$passUsu."'
            WHERE idUsuario = ".$idUsuario;


$resultado = mysqli_query($link,$sql)
or die(mysqli_error($link));

return $resultado;

}