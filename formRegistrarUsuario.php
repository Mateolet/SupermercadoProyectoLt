<?php  

    
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un Usuario</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="registroUsuario.php" method="post">
                <div class='form-group'>
                <label for="nomUsuario">Nombre</label>
                <input type="text" name="nomUsuario" class='form-control' id="nomUsuario" required>
                <br>
                <label for="apeUsuario">Apellido</label>
                <input type="text" name="apeUsuario" class='form-control' id="apeUsuario" required>
                <br>
                <label for="emailUsuario">Email</label>
                <input type="email" name="emailUsuario" class='form-control' id="emailUsuario" required>
                <br>
                <label for="passUsu">Password</label>
                <input type="password" name="passUsu" class='form-control' id="passUsu" required>
                <br>
              
            
            </div>
            <button class='btn btn-info my-3 mr-3 px-4'>Registar usuario</button>
            <a href="adminUsuarios.php" class='btn btn-outline-info'>
            Volver a panel de usuarios
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>