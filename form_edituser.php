<?php include("backend/users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
<?php 
$id= $_GET["iduser"];
//var_dump($id_produc);

$usuario =traer_usuario($cnx,$id);

$nombre = $usuario['nombre'];
$apellido_paterno = $usuario['apellido_paterno'];
$apellido_materno = $usuario['apellido_materno'];
$clave = $usuario['clave'];
$telefono = $usuario['telefono'];
$correo = $usuario['correo'];
?>

<form action="actualizar_usuario.php" method="post">

<label for="nombre">nombre:</label>
<input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>" required><br><br>

<label for="apellido_paterno">apellido_paterno:</label>
<input type="text" name="apellido_paterno" id="apellido_paterno" required value="<?php echo $apellido_paterno?>" ><br><br>

<label for="apellido_materno">apellido_materno:</label>
<input type="text" name="apellido_materno" id="apellido_materno" required value="<?php echo $apellido_materno?>" ><br><br>

<label for="clave">clave:</label>
<input type="text" name="clave" id="clave" required value="<?php echo $clave?>"><br><br>

<label for="telefono">telefono:</label>
<input type="text" name="telefono" id="telefono" required value="<?php echo $telefono?>"><br><br>

<label for="correo">correo:</label>
<input type="text" name="correo" id="correo" required value="<?php echo $correo?>"><br><br>

<input type="hidden" name="id" id="id" required value="<?php echo $id?>"><br><br>

<input type="submit" name="Actualizar_Producto" value="Actualizar">
</form>




</body>
</html>