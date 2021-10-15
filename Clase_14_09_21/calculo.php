<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP</title>
    </head>
    <?php
        $x = (float) $_POST['x'];
        $y = (float) $_POST['y'];
        $z = (float) $_POST['z'];
        $w = (float) $_POST['w'];

        function calcular($xx,$yy,$zz,$ww){
            $denominadorz = ($zz ** 2) - 100;
            $denominadorx = (($xx ** 3) + (12 * $yy)) - $zz;
            $nominadorx = ((3*($xx**3) - (15*$yy)));
            $nominadorw = ((8 * $ww * $xx) + (20*($yy**2)));
            if($denominadorx == 0 || $denominadorz == 0):
                echo "ERROR DIVISION ENTRE ZERO";
            else:
                $result = (($nominadorx/$denominadorz) + ($nominadorw / $denominadorx));
                return $result;
            endif; 
        }
    ?>
    <body>
        <form method="POST" action="formulario.html" name="formulario">
            <table width="650" border="1">
            <tr>
                <td align="center" width="100" colspan="2">
                    <b>Formulario para resolver la ecuación</b>
                </td>
                <td rowspan="2">
                    <img src="logo.JPG" width="160" height="120">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <b>Ecuacion</b>
                </td>
                <td>
                    <img src="ecuacion.JPG" alt="ecuacion" width="600" height="140">
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <img src="fx.jpg">
                </td>
                <td align="center">Valor ingresedo en x</td>
                <td align="center">
                    <?php
                        echo $x;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center">Valor ingresedo en y</td>
                <td align="center">
                    <?php
                        echo $y;
                    ?>
                </td>
            </tr>
            
            <tr>
                <td align="center">Valor ingresedo en z</td>
                <td align="center">
                    <?php
                        echo $z;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center">Valor ingresedo en w</td>
                <td align="center">
                <?php
                        echo $w;
                    ?>
                </td>
            </tr>
            <tr>
                    <td align="center">
                        Respuesta
                    </td>
                    <td align="center">
                        <?php
                            echo calcular($x,$y,$z,$w);
                        ?>
                    </td>
                    <td align="center"><input type="submit" name="cal" id="cal" value="Nuevo"></td>
                </tr>
                <tr>
                <td colspan="4" align="center">
                    <img src="estadisticas.jpg" width="600" height="180">
                </td>
                </tr>
            </table>
        </form>
    </body>
</html>