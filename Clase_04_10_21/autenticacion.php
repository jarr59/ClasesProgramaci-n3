<?php
session_start();
if($usuario = $_POST['usuario'] == "php" && $contrasena = $_POST['contrasena'] == "pass"){
	$_SESSION["autenticado"] = "si";
	$_SESSION["usuario"] = $_POST["usuario"];
	header("Location: aplicacion.php");
}
else{
	header("Location: login.php?errorusuario=si");
}
?>