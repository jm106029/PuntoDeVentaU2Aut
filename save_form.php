<?php
include("conexionBD.php");
if (isset($_POST['Guardar_Producto'])) 
{

  session_start();

     $COD_BARRAS=$_POST['codBarras'];
     $NOMBRE_PROD=$_POST['nombreProducto'];
     $CANTIDAD=$_POST['cantidad'];
     $PROVEEDOR=$_POST['proveedor'];
     $ESPECIFICACIONES=$_POST['especificaciones'];


     $query = "INSERT INTO productos(cod_barras,nombre_producto,cantidad,proveedor,especificaciones) VALUES ('$COD_BARRAS','$NOMBRE_PROD','$CANTIDAD','$PROVEEDOR','$ESPECIFICACIONES')";
     $result = mysqli_query($cnx, $query);
     if(!$result) {
       die("Algo Salio Mal.". mysqli_error($cnx)); 
     }

     if ($result) {
      $_SESSION['mensaje'] = "El producto se ha guardado con éxito.";
  } else {
      $_SESSION['mensaje'] = "Hubo un error al guardar el producto: " . mysqli_error($cnx);
  }
  
     
     header("Location: productos.php");
  
}


?>