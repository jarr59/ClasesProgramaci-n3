<html>
	<head>
		<title>Formulario</title>
	</head>
	<?php
		include "seguridad.php";
	?>
	<body>
		<h1>Formulario de productos</h1>
		<form action="calcular.php" method="Post">
			<table border="1" bgcolor="orange">
				<tr>
					<td>Nombre:</td>
					<td>
						<input type="text" maxlenght="60" name="nombre">
					</td>
					<td>Edad:</td>
					<td>
						<input type="number"  name="edad" min="1">
					</td>
				</tr>
				<tr>
					<td><b>D</b>epartamento:</td>
					<td>
						<select name="departamento">
							<option value="Santa Ana">Santa Ana</option>
							<option value="San Salvador">San Salvador</option>
							<option value="Cuscatlan">Cuscatlan</option>
							<option value="La paz">La paz</option>
							<option value"Sonsonate">Sonsonate</option>
							<option value"La Libertad">La Libertad</option>
							<option value"Chalatenango">Chalatenango</option>
							<option value"San Salvador">San Salvador</option>
							<option value"San Vicente">San Vicente</option>
							<option value"Cabañas">Cabañas</option>
							<option value"Usulután">Usulután</option>
							<option value"San Miguel">San Miguel</option>
							<option value"Morazán">Morazán</option>
							<option value"La Unión">La Unión</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nombre de producto:</td>
					<td>
						<input type="text" maxlenght="60" name="producto">
					</td>
					<td>Precio de producto:</td>
					<td>
						<input type="number"  name="precio" min="1">
					</td>
				</tr>
				<tr>
					<td colspan="4" align="center">
						<input type="submit" value="Enviar"> 
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>