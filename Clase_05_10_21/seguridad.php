<?php
	//Iniciar la sesion
	session_start();
	if(!isset($_SESSION["autenticado"]) and  !isset($_SESSION["autenticado2"])){
		header("Location: login.php");
		exit();
	}
?>
