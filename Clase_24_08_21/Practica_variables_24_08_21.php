<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Practica 2 variables PHP</title>
	</head>
	<body>
		<?php
			//Modulo de titulo
			echo "<h1 style=color:blue><b>Programa de variables 2 en php</b></h1><br/>";
			//Espacio para mostrar contenido con variables
			$VNombre = (string) "José Alfredo"; 
			$VApellido = (string) "Ruíz Reyes";
			echo "<h2 style=color:chocolate><b>Nombre del estudiante: 
				".$VNombre." + ".$VApellido."</b></h2>";
			
			//Modulo de valores numericos
			echo "<h3>Operaciones con variables numericas</h3>";
			$n1 = (integer) 10;
			$n2 = (integer) 20;
			$n3 = (integer) 30;
			$suma = $n1 + $n2 + $n3;
			$resta = $n1 - $n2 - $n3;
			echo "<br>La sumatoria de los numeros ".$n1." + ".$n2." + ".$n3." = <b>".$suma." </b>";
			echo "<br>La resta de los numeros : ".$n1." - ".$n2." - ".$n3." = <b>".$resta."</b>";
			$n_1 = (float) 150.5;
			$n_2 = (float) 200.5;
			$n_3 = (float) 45.5;
			$n_total = (float) $n_1 * $n_2 * $n_3;
			echo "<br>La multiplicación de los números ".$n_1." * ".$n_2." * ".$n_3." 
				= <b>".$n_total."</b>";
			$n_division = (float) $n_1 / $n_2 / $n_3;
			echo "<br>La division de los números ".$n_1." / ".$n_2." / ".$n_3." 
				= <b>".$n_division."</b>";
			
			//Operaciones con varibles numericas y cadena
			echo "<h3>Operaciones con varibles numéricas y cadena</h3>";
			$nombre = (string) "Carlos";
			$dinero_total = (integer) 300;
			$dos_tercios = (integer) $dinero_total * 2;
			$denominador = (integer) 3;
			$total = (integer) $dos_tercios / $denominador;
			
			echo "<br>Si $nombre tiene $".$dinero_total." y gasta de su dinero en comprar
				regalos ¿Cúanto dinero invierte en regalos?<br>";
			echo "<br><h3><b>R/En total ".$nombre." invierte la cantidad en regalos de $ ".$total."</b></h3>";
		?>
	</body>
</html>