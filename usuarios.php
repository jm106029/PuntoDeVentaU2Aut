<?php include("backend/users.php"); ?>



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
    <title>usuarios</title>
</head>

<body>
    <h1>usuarios</h1>

    <?php if ($mensaje) : ?>
    <span class="message" id="message"><?php echo $mensaje?> <a href="" onclick="cerrar()">cerrar</a></span>
    <?php endif; ?>
    <br>
    <form action="save_user.php" method="post">

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre" required autocomplete="off"><br><br>

        <label for="apellido_paterno">apellido_paterno:</label>
        <input type="text" name="apellido_paterno" id="apellido_paterno" required autocomplete="off"><br><br>

        <label for="apellido_materno">apellido_materno:</label>
        <input type="text" name="apellido_materno" id="apellido_materno" required autocomplete="off"><br><br>

        <label for="clave ">clave :</label>
        <input type="text" name="clave" id="clave" required autocomplete="off"><br><br>

        <label for="telefono">telefono:</label>
        <input type="text" name="telefono" id="telefono" required autocomplete="off"><br><br>

        <label for="correo">correo:</label>
        <input type="text" name="correo" id="correo" required autocomplete="off"><br><br>


        <input type="submit" name="Guardar_usuario" value="Guardar"><br><br>
    </form>

    
<?php
    
?>


<table border="1">
        <tr>
            <th>nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
            <th>clave</th>
            <th>telefono</th>
            <th>correo</th>
            <th>Acción</th>
        </tr>
        <?php
        
        $usuarios = getUsers($cnx);

        if (!empty($usuarios)) {
            foreach ($usuarios as $usuario) {

                echo "<tr>";
                echo "<td>" . $usuario['nombre'] . "</td>"; 
                echo "<td>" . $usuario['apellido_paterno'] . "</td>"; 
                echo "<td>" . $usuario['apellido_materno'] . "</td>"; 
                echo "<td>" . $usuario['clave'] . "</td>"; 
                echo "<td>" . $usuario['telefono'] . "</td>";
                echo "<td>" . $usuario['correo'] . "</td>";
                echo "<td>
                 <a href='usuarios.php?iduser_el=".$usuario['id']."'>Eliminar</a>
                 <a href='form_edituser.php?iduser=".$usuario['id']."'>Editar</a>
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