<?php
	//usuario: php
	//clave : pass
?>
<html>
	<head>
		<title>Autenticación PHP</title>
	</head>
	<body>
		<h2>Formulario de autenticación</h2>
		<?php
			if (isset($_GET["errorusuario"])){
		?>
		<font color="red"><b>Datos incorrectos!!</b></font>
		<?php
			}
		else{
		?>
		Introducir usuario y contraseña
		<?php
			}
		?>
		<form action="autenticacion.php" method="post">
			<table border="0">
				<tr>
					<td>Usuario:</td>
					<td>
						<input name="usuario" size="30" value="">
					</td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td>
						<input type="password" name="contrasena" size="30">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Inicio de sesion">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>