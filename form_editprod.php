<?php include("backend/products.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
<?php 

$id_produc= $_GET["idprod"];
//var_dump($id_produc);

$producto = traer_producto($cnx,$id_produc);

$codigo_barras =$producto['cod_barras'];
$nombre_producto =$producto['nombre_producto'];
$cantidad =$producto['cantidad'];
$proveedor =$producto['proveedor'];
$especifa =$producto['especificaciones'];
?>

<form action="actualizar_producto.php" method="post">

<label for="codBarras">COD_BARRAS:</label>
<input type="text" name="codBarras" id="codBarras" value="<?php echo $codigo_barras?>" required autocomplete="off"><br><br>

<label for="nombreProducto">NOMBRE_PROD:</label>
<input type="text" name="nombreProducto" id="nombreProducto" required value="<?php echo $nombre_producto?>" autocomplete="off"><br><br>

<label for="cantidad">CANTIDAD:</label>
<input type="number" name="cantidad" id="cantidad" required value="<?php echo $cantidad?>" autocomplete="off"><br><br>

<label for="proveedor">PROVEEDOR:</label>
<input type="text" name="proveedor" id="proveedor" required value="<?php echo $proveedor?>" autocomplete="off"><br><br>

<label for="especificaciones">ESPECIFICACIONES:</label>
<textarea name="especificaciones" id="especificaciones" rows="4" cols="50" required autocomplete="off" > <?php  echo $especifa ?>  </textarea><br><br>


<input type="hidden" name="id_productos" id="id_productos" required value="<?php echo $id_produc?>"><br><br>

<input type="submit" name="Actualizar_Producto" value="Actualizar">
</form>




</body>
</html>