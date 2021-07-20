

<?php



function listarPro(){

    $link = conectar();

    $sql = "SELECT idProducto, nomPrd, precioPrd, stockPrd,
    productos.idMarca, nomMarca,
    productos.idTipo, nomTip,
    imgPrd
FROM productos, marcas, tipos
WHERE productos.idMarca = marcas.idMarca
AND productos.idTipo = tipos.idTipo";


    $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));
    
        return $resultado;

}



function uploadFile(){


 
   $imgPrd = "predeterminado.jpg";
    
  
  if(isset($_POST["imgActual"])){


   $imgPrd = $_POST["imgActual"];
  }
  
   


  if($_FILES["imgPrd"]["error"] == 0){

  

$ruta = "productos/"; 


$temp = $_FILES["imgPrd"]["tmp_name"]; 




$ext = pathinfo($_FILES["imgPrd"]["name"]);
$ext = $ext["extension"];


$temporal = pathinfo($_FILES["imgPrd"]["tmp_name"]);
$temporal = $temporal["filename"];
$imgPrd = $temporal.".".$ext; 

move_uploaded_file($temp, $ruta.$imgPrd);
      }
      return $imgPrd;
}





function addpro(){

    $nomPrd = $_POST["nomPrd"];
    $precioPrd = $_POST["precioPrd"];
    $stockPrd = $_POST["stockPrd"];
    $idMarca = $_POST["idMarca"];
    $idTipo = $_POST["idTipo"];
   $imgPrd =  uploadFile();

    $link = conectar();

    $sql = "INSERT INTO productos
            VALUES 
            (default,
            '".$nomPrd."',
            ".$precioPrd.",
            ".$stockPrd.",
             ".$idMarca.",
              ".$idTipo.",
               '".$imgPrd."')";

    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    return $resultado;

}




function seeProd(){

    $idProducto = $_GET["idProducto"];

    $link = conectar();

    $sql = "SELECT idProducto, nomPrd, precioPrd, stockPrd,
             productos.idMarca, nomMarca,
            productos.idTipo, nomTip,
            imgPrd 
            FROM productos,marcas,tipos
            WHERE  productos.idMarca = marcas.idMarca
            AND productos.idTipo = tipos.idTipo
            AND idProducto = ".$idProducto;


        $resultado = mysqli_query($link,$sql)
        or die(mysqli_error($link));

        $producto = mysqli_fetch_assoc($resultado);

        return $producto;

}


function modProd(){

    $idProducto = $_POST["idProducto"];
    $nomPrd = $_POST["nomPrd"];
    $precioPrd = $_POST["precioPrd"];
    $stockPrd = $_POST["stockPrd"];
    $idMarca = $_POST["idMarca"];
    $idTipo = $_POST["idTipo"];
   $imgPrd =  uploadFile();


   $link = conectar();

   $sql = "UPDATE productos
            SET 
                nomPrd = '".$nomPrd."',
                precioPrd = ".$precioPrd.",
                stockPrd = ".$stockPrd.",
                idMarca = ".$idMarca.",
                idTipo = ".$idTipo.",
                imgPrd = '".$imgPrd."'
            WHERE idProducto = ".$idProducto;


            $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));
    
            return $resultado;
}
           


function deleteProd(){

    $idProducto = $_POST["idProducto"];


    $link = conectar();

    $sql = "DELETE FROM productos
            WHERE idProducto = ".$idProducto;

    $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

    return $resultado;
}