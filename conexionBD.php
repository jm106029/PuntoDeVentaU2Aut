<?php
//INSERT INTO usuarios(nombre_usu,contraseña,correo_usu,tipo_usu,activo,fch_ingreso) VALUES ('Jose','123','mt124217@gmail.com',0,1,'2023/04/18');

$serv = "localhost";

$dbase = "Sistema_M1";

$user = "root";

$pass = "";

$mysqli = new mysqli($serv, $user, $pass, $dbase);

$cnx = mysqli_connect($serv, $user, $pass, $dbase);


if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL:(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}

?>