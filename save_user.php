<?php
include("conexionBD.php");
if (isset($_POST['Guardar_usuario'])) 
{

  session_start();

       
    $nombre =$_POST['nombre'] ;
    $apellido_paterno =$_POST['apellido_paterno'] ;
    $apellido_materno =$_POST['apellido_materno'] ;
    $clave =$_POST['clave'] ;
    $telefono=$_POST['telefono'] ;
    $correo=$_POST['correo'] ;

     $query = "INSERT INTO users(nombre,apellido_paterno,apellido_materno,clave,telefono,correo) VALUES ('$nombre','$apellido_paterno','$apellido_materno','$clave','$telefono','$correo')";
     $result = mysqli_query($cnx, $query);
     if(!$result) {
       die("Algo Salio Mal.". mysqli_error($cnx)); 
     }

     if ($result) {
      $_SESSION['mensaje'] = "El usuario se ha guardado con éxito.";
  } else {
      $_SESSION['mensaje'] = "Hubo un error al guardar el usuario: " . mysqli_error($cnx);
  }
  
     
     header("Location: usuarios.php");
  
}


?>