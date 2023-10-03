<?php 
include('./conexionBD.php');


function actualizar($conexion)  {
    session_start();
    
    $id_productos =$_POST['id_productos'] ;
    $codbarras =$_POST['codBarras'] ;
    $nombreP =$_POST['nombreProducto'] ;
    $cantidad =$_POST['cantidad'] ;
    $provedor =$_POST['proveedor'] ;
    $especificaciones=$_POST['especificaciones'] ;
    
    $query = "UPDATE productos set cod_barras='$codbarras',nombre_producto='$nombreP',cantidad='$cantidad',proveedor='$provedor',especificaciones='$especificaciones' WHERE id_productos='$id_productos'";
    $result = mysqli_query($conexion, $query);
    //var_dump($conexion);
    if($result){
        $_SESSION['mensaje'] = "El producto se ha actualizado con éxito.";

        header("Location: productos.php");
    }else{

        $_SESSION['mensaje'] = "El producto  no se ha actualizado";
        header("Location: productos.php");
    }
}

actualizar($cnx);

?>