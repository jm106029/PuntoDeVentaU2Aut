<?php 
include('./conexionBD.php');


function actualizar($conexion)  {
    session_start();

    $id =$_POST['id'] ;
    $nombre =$_POST['nombre'] ;
    $apellido_paterno =$_POST['apellido_paterno'] ;
    $apellido_materno =$_POST['apellido_materno'] ;
    $clave =$_POST['clave'] ;
    $telefono=$_POST['telefono'] ;
    $correo=$_POST['correo'] ;



    $query = "UPDATE users set nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',clave='$clave',telefono='$telefono',correo='$correo' WHERE id='$id'";
    $result = mysqli_query($conexion, $query);
    //var_dump($conexion);
    if($result){
        $_SESSION['mensaje'] = "El usuario se ha actualizado con éxito.";

        header("Location: usuarios.php");
    }else{

        $_SESSION['mensaje'] = "El producto  no se ha actualizado";
        header("Location: usuarios.php");
    }
}

actualizar($cnx);

?>