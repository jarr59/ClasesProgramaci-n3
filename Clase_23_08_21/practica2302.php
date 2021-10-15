<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica de PHP Variables</title>
    </head>
    <body>
        <?php
            //Modulo de valores númerico
            $n1 = (float) 15.5;
            $n2 = (float) -15.5;
            $n3 = (float) 10.9;
            $suma = $n1 + $n2;
            $resta = $n2 - $n3;
            echo "<br>La sumatoria entre las dos variables es: " .$suma;
            echo "<br>La resta o diferencia entre las dos variables es: <br>$resta</br>";
            //Modulo de valores de tipo cadena
            $nombre = (string) "Escribir los nombres";
            $apellido = (string) "Escribir sus apellidos";
            $edad = (integer) 20;
            //Modulo de variables booleanas
            $positivo = (boolean) true;
            $negativo = (boolean) false;
            echo "<br>El valor verdadero es: " .$positivo. "<br />";
            echo "<br>El valor negativo es: " .$negativo. "<br />";
        ?>
    </body>
</html>