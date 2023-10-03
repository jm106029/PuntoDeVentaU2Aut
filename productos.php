<?php include("backend/products.php"); ?>



<?php
session_start();

$mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : null;

// Borra el mensaje de la sesión para que no se muestre nuevamente
unset($_SESSION['mensaje']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>

<body>
    <h1>Productos</h1>
    <!-- <a href="usuarios.php" class="menu__link">Usuarios</a> -->

    <?php if ($mensaje) : ?>
    <span class="message" id="message"><?php echo $mensaje?> <a href="" onclick="cerrar()">Cerrar</a></span><br><br>
    <?php endif; ?>
    <br>
    <form action="save_form.php" method="post">

        <label for="codBarras">COD_BARRAS:</label>
        <input type="text" name="codBarras" id="codBarras" required autocomplete="off"><br><br>

        <label for="nombreProducto">NOMBRE_PROD:</label>
        <input type="text" name="nombreProducto" id="nombreProducto" required autocomplete="off"><br><br>

        <label for="cantidad">CANTIDAD:</label>
        <input type="number" name="cantidad" id="cantidad" required autocomplete="off"><br><br>

        <label for="proveedor">PROVEEDOR:</label>
        <input type="text" name="proveedor" id="proveedor" required autocomplete="off"><br><br>

        <label for="especificaciones">ESPECIFICACIONES:</label>
        <textarea name="especificaciones" id="especificaciones" rows="4" cols="50" required autocomplete="off"></textarea><br><br>

        <input type="submit" name="Guardar_Producto" value="Guardar">
    </form>
        <br>
        <br><br>
<?php
    
?>


<table border="1">
        <tr>
            <th>Codigo de barras</th>
            <th>Nombre del Producto</th>
            <th>Cantidad</th>
            <th>Especificaciones</th>
            <th>Proveedor </th>
            <th>Acción</th>
        </tr>
        <?php
        
        $productos = getProductos($cnx);

        if (!empty($productos)) {
            foreach ($productos as $producto) {

                echo "<tr>";
                echo "<td>" . $producto['cod_barras'] . "</td>"; 
                echo "<td>" . $producto['nombre_producto'] . "</td>"; 
                echo "<td>" . $producto['cantidad'] . "</td>"; 
                echo "<td>" . $producto['especificaciones'] . "</td>"; 
                echo "<td>" . $producto['proveedor'] . "</td>";
                 
                echo "<td>
                 <a href='productos.php?idprod_el=".$producto['id_productos']."'>Eliminar</a>
                 <a href='form_editprod.php?idprod=".$producto['id_productos']."'>Editar</a>
                 </td>";  
                
                echo "</tr>";
              
            }
        }
        ?>
    </table>


<br><br><br>
    <a href="index.php"><button>cancelar</button></a>
<script>    
    function cerrar(){
        const cerrar=document.getElementById("message");
        cerrar.style.display."none"
    }
</script>
</body>




</html>