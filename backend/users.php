<?php
include('./conexionBD.php');



function getUsers($conn) 
{
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    // Verificar si se encontraron usuarios
    if (mysqli_num_rows($result) > 0) {
        $usuarios = array();
        while ($fila = mysqli_fetch_assoc($result)) {
            $usuarios[] = $fila;
        }

        //var_dump($productos);
        return $usuarios;
    } else {
        return array(); // No se encontraron productos
    }
    
   
}


function eliminar($conexion){

    $id = $_GET["iduser_el"];

    $query = "DELETE  FROM users WHERE id=".$id."";
    $result = mysqli_query($conexion, $query);

      

}
eliminar($cnx);


function traer_usuario( $conexion,$id){

    $query = "SELECT *  FROM users WHERE id=".$id."";
    $result = mysqli_query($conexion, $query);

    //var_dump(mysqli_num_rows($result));
    if (mysqli_num_rows($result) > 0) {
        $usuario = null;
        while ($fila = mysqli_fetch_assoc($result)) {

           // var_dump($fila['id_productos']);
            //var_dump($fila['nombre_producto']);
            $usuario = $fila;
        }
        return $usuario;
        
    } else {
        return null; // No se encontraron productos
    }
    

};


//actualizar();



?>