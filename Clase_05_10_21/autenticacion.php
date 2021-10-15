<?php
session_start();
if($usuario = $_POST['usuario'] == "php" && $contrasena = $_POST['contrasena'] == "pass"){
	$_SESSION["autenticado"] = "si";
	$_SESSION["usuario"] = $_POST["usuario"];
	header("Location: formulario.php");
}
elseif($usuario = $_POST['usuario'] == "php2" && $contrasena = $_POST['contrasena'] == "pass2"){
	$_SESSION["autenticado2"] = "si";
	$_SESSION["usuario2"] = $_POST["usuario"];
	header("Location: formulario.php");
}
else{
	header("Location: login.php?errorusuario=si");
}
?>