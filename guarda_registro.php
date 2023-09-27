<?php 
    $tx_usuario = $_POST['tx_usuario'];
    $tx_contraseña = $_POST['tx_contraseña'];

    $mensajes = [];

    // Validación de la contraseña
    if (strlen($tx_contraseña) < 8) {
        $mensajes[] = 'La contraseña debe tener mas de 8 caracteres';
    }

    if (empty($mensajes) && !preg_match('/[A-Z]/', $tx_contraseña)) {
        $mensajes[] = 'Hace falta una letra mayúscula';
    }

    if (empty($mensajes) && !preg_match('/[a-z]/', $tx_contraseña)) {
        $mensajes[] = 'Hace falta letra minúscula';
    }

    if (empty($mensajes) && !preg_match('/[0-9]/', $tx_contraseña)) {
        $mensajes[] = 'Hace falta  un número';
    }

    if (empty($mensajes) && !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $tx_contraseña)) {
        $mensajes[] = 'Hace falta un carácter especial';
    }

    if (!empty($mensajes)) {
        $mensaje_final = implode("\n", $mensajes);
        
        echo "
        <script>
           alert('$mensaje_final');
           window.location.href = 'registro.php'; // Cambia 'registro.php' por la página de registro
        </script>
        ";
        exit; // Contraseña no cumple con la condición
    }

    include("conexionBD.php"); 
    
    $query = "INSERT INTO usuarios(nombre_usuario,contrasena,tipo_usuario,activo) VALUES ('$tx_usuario', '$tx_contraseña', 0, 1);";

    $resultado = mysqli_query($mysqli, $query);
    if($resultado)
    {
        // USUARIO REGISTRADO
        echo "
        <script>
           alert('¡¡¡ REGISTRADO \\n Bienvenido ".$tx_usuario."');
        </script>
        ";
    }
    else
    {
        // Error: no se pudo registrar...
        echo "
        <script>
           alert('¡¡¡ E R R O R \\n No se pudo registrar en la base de datos...');
        </script>
        ";   
    }
    $mysqli->close();

    echo "<a href='login.php'>Click aquí para ingresar ahora</a>";
?>
