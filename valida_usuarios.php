<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	if (empty($_SESSION['usuario'])) 
	
		header("Location: login.php");
	
	else
	$tipo_usuario=$_SESSION['tipo_usuario'];
?>