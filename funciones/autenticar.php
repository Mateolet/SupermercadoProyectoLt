<?php






    function login(){

        $emailUsuario = $_POST["emailUsuario"];
        $passUsu = $_POST["passUsu"];
    
    
        $link = conectar();
    
        $sql = "SELECT nomUsuario, apeUsuario FROM usuarios
                WHERE emailUsuario = '".$emailUsuario."'
                AND passUsu = '".$passUsu."'";
    
        $resultado = mysqli_query($link, $sql)
        or die(mysqli_error($link));
    
        $cantidad = mysqli_num_rows($resultado);
    
        if($cantidad == 0){
         
            header("location: formLogin.php?error=1");
        }
        else{
       
    
            $_SESSION["login"] = 1;
    
           
            $usuario = mysqli_fetch_assoc($resultado);
          
            $_SESSION["usuario"] = $usuario["nomUsuario"].' '. $usuario["apeUsuario"];
    
       
    
            header("location: admin.php");
        }
    }

function logout(){
    $usuario = $_SESSION["usuario"];
    session_unset();
    session_destroy();
    
 

    header("refresh:3;url=index.php");

    return $usuario;
}


function autenticar(){


    if(!isset($_SESSION["login"])){

            header("location: formLogin.php?loguear=1");

    }
  


}
