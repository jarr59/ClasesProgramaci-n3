<!DOCTYPE html>
<html >
<head>
    <title>Ejemplo 2. Uso de variables  </title>
</head>
<body>
    <?php
        echo "<p> El valor de la primera variable es: 5 </p>";
        $cadena = "5"; //esto es una cadena
        echo "<p> El valor de la segunda variable es: 3 </p>";
        $entero = 3; //esto es un entero
        echo "El resultado de la suma $cadena + $entero es: ";
        echo $cadena + $entero;
    ?>
</body>
</html>