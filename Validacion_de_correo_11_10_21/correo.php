<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validación de correo</title>
	</head>
	<body>
		<center>
			<h2>Validación de dirreción de correo electroníco</h2>
			<form action="correo.php" method="POST">
				<?php
					echo '<p><input type="text" name="correo" value="" size="60">';
				?>
				<p><input type="submit" value="Validar"></p>
				<input type="reset" value="Limpiar">
			</form>
			<?php
				if(!empty($_POST['correo']))
				{
					$cadena = $_POST['correo'];
				}
				
				//Funcion para comprobar que no existan dos puntos seguidos
				function comprobar_puntos($cadena)
				{
					$posicion = strpos($cadena,'.');
					$continuar = true;
					while(($posicion) and ($continuar))
					{
						if(($cadena[$posicion - 1] != '.') and
							($cadena[$posicion + 1] != '.') and
						    ($cadena[$posicion - 1] != '@') and
							($cadena[$posicion + 1] != '@'))
							{
								$cadena = substr($cadena, $posicion + 1);
							}
							else
							{
								$continuar = false;
							}
							$posicion = strpos($cadena,'.');
					}
					return $continuar;
				}
				
				function valida_correo($cadena)
				{
					$caracteres = count_chars($cadena);
					if(($caracteres[ord('@')] == 1) and ($caracteres[ord('.')] >= 1))
					{
						$caracteres = count_chars($cadena, 3);
						$i = 0;
						$continuar = true;
						while(($i < strlen($cadena)) and $continuar)
						{
								$posicion = ord($cadena[$i]);
							if($posicion < ord('0'))
							{
								if($posicion != ord('.'))
								{
									$continuar = false;
								}
							}
							elseif(($posicion != ord('9')) && ($posicion < ord('@'))
							{
								$continuar = false;
							}
							elseif(($posicion >= ord('Z')) && ($posicion < ord('a')))
							{
								$continuar = false;
							}
							elseif($posicion > ord('z'))
							{
								$continuar = false;
							}
							$i++;
						}
					}
				}
			?>
		</center>
	</body>
</html>