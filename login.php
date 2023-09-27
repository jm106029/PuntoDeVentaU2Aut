<?php
if(!empty($_POST['tx_usuario']))
 {
	   $tx_usuario = $_POST['tx_usuario'];
       $tx_contraseña = $_POST['tx_contraseña'];

       include("conexionBD.php");
       $query= "SELECT * FROM usuarios WHERE nombre_usuario = '$tx_usuario' AND contrasena = '$tx_contraseña'; ";
       $resultado = mysqli_query($mysqli,$query);
       if($resultado->num_rows > 0)
     {
     	
		foreach($resultado as $columna){

			session_start();
			$_SESSION['usuario']= $tx_usuario;
			$_SESSION['tipo_usuario']=$columna['tipo_usuario'];
			echo "Tipo de usuario =". $columna['tipo_usuario'];
			header("Location: index.php"); 
		}
		
     }
        else
        {
        echo "
        <script>
           alert('¡¡¡ Acceso denegado...!!! \\n Favor de verificar los datos...');
        </script>
        ";
        }
      $mysqli->close();  	
    }  
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<div class="login-container">
    <!-- <h1>Papeleria  Ross📕</h1><br> -->
    <h1>Inicia Sesión</h1>
    <img src="img/LogoPapelería2.png" alt="Logo" style="width: 50%;">

    <form action="login.php" method="POST">
        <div>
            <img src="img/user2.png" alt="Usuario">
            <input type="text" id="Usuario" placeholder="Usuario" name="tx_usuario" autocomplete="off" required >
        </div>
        <div>
            <img src="img/llave.png" alt="Contraseña">
            <input type="password" id="Contraseña" placeholder="Contraseña" name="tx_contraseña" autocomplete="off" required>
        </div>
        <button id="enviar">Enviar</button><br>
        <a href="registro.php" style="text-align: end;">No tienes cuenta? Registrate

        </a>
    </form>
   
</div>

</body>
</html>
