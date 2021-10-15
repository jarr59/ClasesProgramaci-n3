<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Practica php variable, Operadores y Condiciones</title>
</head>
<body>
	<?php
		date_default_timezone_set('America/El_Salvador');
		//Modulo de titulo
		echo "<h1><b>Aplicacion de Uso de variables y condiciones</b></h1><br />";
		$nombre = (string) "Bryan";
		$apellido = (string) "Hernandez";
		echo "<h2 style=color:red><b>Nombre del estudiante: ".$nombre." ".$apellido." </b></h2>";
		
		//Modulo de operaciones aritmeticas
		$x = (integer) 5;
		$y = (integer) 2;
		$z = (float) 3.14;
		echo "El valor de X: <b>".$x."</b><br>";
		echo "El valor de Y: <b>".$y."</b><br>";
		echo "El valor de Z: <b>".$z."</b><br>";
		echo "La suma de $x + $y";
		echo "<br>La suma de x + y es: <b>".($x + $y)."</b><br>";
		echo "La exponenciación de x ^ y es: <b>".($x ** $y)."</b><br>";
		echo "El residuo de $x / $y es: <b>".($x % $y)."</b><br>";
		
		//Modulo de operadores de incremento / decremento
		$n = (integer) 20;
		echo "El valor inicial de n es: <b>".$n."</b><br>";
		echo "El valor de n modificado con el operador PreIncremento es: <b>".(++$n)." ".$n."</b><br>";
		echo "El valor de n modificado con el operador PostIncremento es: <b>".($n++)." ".$n."</b><br>";
		echo "El valor de n modificado con el operador de PreDecremento es: <b>".(--$n)." ".$n."</b><br>";
		echo "El valor de n modificado con el operador de PostDecremento es: <b>".($n--)." ".$n."</b><br>";
		
		//Modulo de arreglos o array
		$mensaje = [];
		$mensaje[0] = "Universidad Modular Abierta";
		$mensaje[2] = "Ciencias";
		$mensaje[1] = "Facultad";
		$mensaje[4] = "Economicas";
		
		echo "Nombre de la institución: <b>".$mensaje[0]."</b><br>";
		echo "Nombre de la Facultad:<b> ".$mensaje[1]." ".$mensaje[2]." ".$mensaje[4]."</b><br><br><br>";
		
		//Modulos de Estructuras de Control
		//Modulo de IF-ELSE
		
		$n1 = (integer) 4;
		$n2 = (integer) 10;
		$n3 = (integer) 6;
		
		echo "Los numero que se van a comparar son: <b>".$n1.", ".$n2." y ".$n3."</b><br>";
		if($n1 > $n2):
			$mayor = $n1;
		else:
			$mayor = $n2;
		endif;
		
		if($mayor < $n3):
			$mayor = $n3;
		endif;
		
		echo "El numero mayor es: <b>".$mayor."</b><br><br>";
		
		//Modulo de IF -ELSEIF -ELSE
		$dia_actual = (string) date("D");
		$nombreDIA = (string) "";
		
		if($dia_actual == "Mon"):
			$nombreDIA = "Lunes";
		elseif ($dia_actual  == "Tue"):
				$nombreDIA = "Martes";
		elseif ($dia_actual == "Wed"):
			$nombreDIA = "Miercoles";
		elseif ($dia_actual == "Thu"):
			$nombreDIA = "Jueves";
		elseif ($dia_actual == "Fry"):
			$nombreDIA = "Viernes";
		elseif ($dia_actual == "Sun"):
			$nombreDIA = "Sabado";
		else:
			$nombreDIA = "Domingo";
		endif;
		
		echo "El dia de ahora es: <b>".$nombreDIA."</b><br>";
		
		$v1 = (integer) 7;
		$v2 = (integer) 10;
		$v3 = (integer) 4;
		$v4 = (integer) 9;
		$v5 = (integer) 10;
		$nmenor = (integer) 0;
		
		if ($v1 > $v2):
			$nmenor = $v2;
		else: 
			$nmenor = $v1;
		endif;
		
		if ($nmenor > $v3):
			$nmenor = $v3;
		endif;
		
		if ($nmenor > $v4):
			$nmenor = $v4;
		endif;
		
		if ($nmenor > $v5):
			$nmenor = $v5;
		endif;
		echo "El menor de los números $v1, $v2, $v3, $v4, $v5 numeros es: <b>".$nmenor."</b><br>";
		
		$npar  = (integer) 0;
		$nimpar = (integer) 0;
		
		if($v1 % 2 == 0):
			$npar += 1;
		else:
			$nimpar += 1;
		endif;
		
		if($v2 % 2 == 0):
			$npar += 1;
		else:
			$nimpar += 1;
		endif;
		
		if($v3 % 2 == 0):
			$npar += 1;
		else:
			$nimpar += 1;
		endif;
		
		if($v4 % 2 == 0):
			$npar += 1;
		else:
			$nimpar += 1;
		endif;
		
		if($v5 % 2 == 0):
			$npar += 1;
		else:
			$nimpar += 1;
		endif;
		echo "Cantidad de pares en los numeros $v1, $v2, $v3, $v4, $v5 es: <b>".$npar."</b><br>";
		echo "Cantidad de impares en los numeros $v1, $v2, $v3, $v4, $v5 es: <b>".$nimpar."</b><br>";
	?>
</body>
</html>