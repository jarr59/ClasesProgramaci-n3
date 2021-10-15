<?php
	//Iniciar la sesion
	session_start();
	if(!isset($_SESSION["autenticado"])){
		header("Location: login.php");
		exit();
	}
?>
bueno feliz noche