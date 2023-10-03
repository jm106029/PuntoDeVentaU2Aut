<?php
require "valida_usuarios.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Ross</title>
    <link rel="icon" href="img/login.png">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body >
    <nav class="menu">
        <section class="menu__container">
            <h1 class="menu__logo"> <img src="img/LogoPapelería2.png" style="width: 10%;border-radius: 35%;"></h1>

            <ul class="menu__links" >
                <li class="menu__item">
                    <a href="index.php" class="menu__link">Inicio</a>
                </li>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="usuarios.php" class="menu__link">Usuarios</a>
                </li>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="productos.php" class="menu__link">Productos</a>
                </li>
<!-- ________________________________        Menu desplegable _______________________-->
                <li class="menu__item  menu__item--show">  
                <!-- <a href="#" class="menu__link"> <img src="assets/arrow.svg" class="menu__arrow">okoko</a> -->
                  <?php
                    if ($tipo_usuario == 1)
                        echo '<a href="usuarios.php" class="menu__link">Usuarios</a>'
                            ?>
                    </li>
                    
                    <li class="menu__item">

                        <a class="menu__link">
                            <?php
                    if (isset($_SESSION['usuario'])) {
                        echo 'Bienvenido, ' . $_SESSION['usuario'];
                    }
                    ?>
                        <?php require "valida_usuarios.php"; ?>
                    </a>

                    <ul class="menu__nesting">

                        <li class="menu__item">

                        <a href="cerrar_sesion.php" class="menu__link menu__link--inside">Salir</a>
                         </li>
                        <!-- <li class="menu__inside">
                            <a href="seccion2.php" class="menu__link menu__link--inside">Novelas</a>
                        </li>
                        <li class="menu__inside">
                            <a href="seccion3.php" class="menu__link menu__link--inside">Infantiles</a>
                        </li>
                        <li class="menu__inside">
                            <a href="seccion4.php" class="menu__link menu__link--inside">Ciencias</a>
                        </li> -->
                    </ul>
                </li> 
            </ul>

            <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>
        </section>

    </nav>
    <br><br><br>

    <center>
        <img src="img/carpeta.png" width="15%">
    </center>
    <div>

        <style>
            .contenedor {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 20px;
                justify-items: center;
            }

            .img_home {
                display: block;
                width: 100%;
                height: auto;
                padding: 1%;
            }

            .titulo {
                text-align: center;
                margin-top: 5px;
            }
        </style>

        <div class="contenedor">

        </div>

        <!-- <script src="js/app.js"></script> -->
<br><br><br><br><br><br><br><br><br><br>
        <footer style="">
            <div class="footer-bottom">
                <p>Papeleria Ross &copy; 2023.</p>
            </div>
        </footer>



        <center>

            <!-- <a href="contacto.html">nosotros</a> -->

            <?php
            if ($tipo_usuario == 1)
                echo '<a href="usuarios.php">usuarios</a>'
                    ?>


            <?php //require  "menu.php";?>
        </center>
</body>

</html>