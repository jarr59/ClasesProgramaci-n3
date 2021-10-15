<html>
	<head>
		<title>Formulario resultado</title>
		<meta charset="utf-8">
	</head>
	<?php
		include "seguridad.php";
		$nombre = (string) $_POST['nombre'];
		$edad = (int) $_POST['edad'];
		$departamento = (string) $_POST['departamento'];
		$producto = (string) $_POST['producto'];
		$precio = (int) $_POST['precio'];
		$Iva = (float) $precio * 0.13;
		$precioConIva = (float) $Iva + $precio;
		$mensaje = (string) 'Menor de edad';
		if($edad >= 18){
			$mensaje = "Mayor de edad";
		}
	?>
	<body>
			<h1>Formulario resultado</h1>
			<form action="formulario.php" >
			<table border="1" bgcolor="orange">
				<tr>
					<td>Nombre:</td>
					<td>
						<?php
							echo $nombre;
						?>
					</td>
					<td>Edad:</td>
					<td>
						<?php
							echo $edad;
							echo  " $mensaje";
						?>
					</td>
				</tr>
				<tr>
					<td><b>D</b>epartamento:</td>
					<td>
						<?php
							echo $departamento;
						?>
					</td>
				</tr>
				<tr>
					<td>Nombre de producto:</td>
					<td>
						<?php
							echo $producto;
						?>
					</td>
					<td>Precio de producto:</td>
					<td>
						<?php
							echo $precio;
						?> $
					</td>
				</tr>
				<tr>
					<td>Iva de producto:</td>
					<td>
						<?php
							echo $Iva;
						?> $
					</td>
					<td>Precio con Iva:</td>
					<td>
						<?php
							echo $precioConIva;
						?> $
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center">
						<input type="submit" value="volver"> 
					</td>
				</tr>
			</table>
		</form>
		</br>
		</br>
		<a href="salir.php">Salir del sistema</a>
	</body>
</html>