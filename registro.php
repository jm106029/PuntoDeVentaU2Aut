<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<div class="login-container">
    
    <h1>Registrate</h1>
    <img src="img/LogoPapelería2.png" alt="Logo" style="width: 50%;">

    <form action="guarda_registro.php" method="POST">
        <div>
            <img src="img/user2.png" alt="Usuario">
            <input type="text" id="Usuario" placeholder="Usuario" name="tx_usuario" autocomplete="off" required >
        </div>
        <div>
            <img src="img/llave.png" alt="Contraseña">
            <input type="password" id="Contraseña" placeholder="Contraseña" name="tx_contraseña" autocomplete="off" required>
        </div>
        <button id="enviar">Registrar</button><br>
        

        </a>
    </form>
   
</div>

</body>
</html>
