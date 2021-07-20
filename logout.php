<?php  
	session_start();
    require "funciones/autenticar.php";
     $usuario = logout();
      
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Salir del sistema</h1>


    <div class="alert alert-info col-8 mx-auto p-2">
    
        Gracias <?=$usuario?> por su Visita.
    
    </div>
    </main>

<?php  include 'includes/footer.php';  ?>