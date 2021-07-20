<?php  
	session_start();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        
        <h1 class="text-center">Ingreso al sistema</h1>


        <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>

        <form action="login.php" method="POST">
        
        
        <label for="emailUsuario">Usuario</label>
                <input type="email" name="emailUsuario" class='form-control' id="emailUsuario" placeholder="Email" required>
                <br>

                <label for="passUsu">Password</label>
                <input type="password" name="passUsu" class='form-control' id="passUsu" required>
                <br>
              
                <button class="btn btn-info my-3 mr-3 px-4 ">Ingresar</button>
                <a href="index.php" class="btn btn-outline-info">
                    Salir
                </a>
                
                
               
        </form>
        </div>


        <div class='alert bg-light p-3 col-8 mx-auto border shadow-sm'>
        <a href="formRegistrarUsuario.php"  class="btn btn-info ml-2 ">Registrarse</a>
      

        </div>


  <?php
   
    if(isset($_GET["error"])){

    

  ?>
    <div class="alert alert-danger p-4 col-8 mx-auto">
    
        Usuario o contraseña Incorrecta
    </div>
    <?php
 }
    ?>

    
<?php

if(isset($_GET["loguear"]))
?>
<div class="alert alert-danger p-4 col-8 mx-auto">

    Necesita loguearse para navegar en este Sitio Web.
    </div>


    <?php

    ?>-
    </main><

<?php  include 'includes/footer.php';  ?>


<?php include "includes/footer.php" ?>