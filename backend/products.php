<?php
include('./conexionBD.php');

$nombre="asdhasthn";


function getProductos($conn) 
{
    $query = "SELECT * FROM productos";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    // Verificar si se encontraron productos
    if (mysqli_num_rows($result) > 0) {
        $productos = array();
        while ($fila = mysqli_fetch_assoc($result)) {
            $productos[] = $fila;
        }

        //var_dump($productos);
        return $productos;
    } else {
        return array(); // No se encontraron productos
    }
    
   
}


function eliminar($conexion){

    $id=$_GET["idprod_el"];

    $query = "DELETE  FROM productos WHERE id_productos=".$id."";
    $result = mysqli_query($conexion, $query);

      

}

eliminar($cnx);
function traer_producto( $conexion,$id){

    $query = "SELECT *  FROM productos WHERE id_productos=".$id."";
    $result = mysqli_query($conexion, $query);

    //var_dump(mysqli_num_rows($result));
    if (mysqli_num_rows($result) > 0) {
        $producto = null;
        while ($fila = mysqli_fetch_assoc($result)) {

           // var_dump($fila['id_productos']);
            //var_dump($fila['nombre_producto']);
            $producto= $fila;
        }
        return $producto;
        
    } else {
        return null; // No se encontraron productos
    }
    

};


//actualizar();



?>