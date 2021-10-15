<!doctype html>
<?php
	session_start();
	$_SESSION = array();
	session_destroy();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contenido no seguro</title>
	</head>
	<body>
		Ahora está fuera de la Aplicación web
		</br></br>
		<a href="login.php">Autenticar usuario</a>
	</body>
</html>