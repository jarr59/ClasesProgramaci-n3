<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Creacion de Fórmula - Clave A </title>
    </head>
    <?php
        //Declaración de variables
        $a = (float) $_POST['a'];
        $b = (float) $_POST['b'];
        $c = (float) $_POST['c'];
        $d = (float) $_POST['d'];
        
        //Realización de fórmula
        function formula ($aa,$bb,$cc,$dd){
            $x = (float) 0;
            if (($dd **2)==441):
                echo "División entre CERO";
            else:
                $x = ((3 * ($cc ** 3)) + (7 * $bb) - (12 * $aa))/(($dd ** 2) - 441) + (6 * $aa * $bb);
                return $x;
            endif;
        }
    ?>
    <body>
       <form name="formulario" method="post" action="formula.html">
            <table width="650" border="1">
                <tr>
                    <td width="110" align="center">Universidad Modular Abierta</td>
                    <td width="145" align="center">Programación III</td>
                    <td colspan="2" align="center"><img src="logo_UMA.png" width="169" height="212" alt="logo"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><b>Realización de Fórmula</b></td>
                    <td colspan="2" rowspan="4"><img src="fx.JPG" width="380" height="91" alt=""></td>
                </tr>
                <tr>
                    <td align="center">a</td>
                    <td align="center">
                        <?php echo $a; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center">b</td>
                    <td align="center">
                        <?php echo $b; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center">c</td>
                    <td align="center">
                        <?php echo $c; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center">d</td>
                    <td align="center">
                        <?php echo $d; ?>
                    </td>
                    <td align="center" width="200">El resultado es:</td>
                    <td align="center" width="200">
                        <?php echo formula($a,$b,$c,$d);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3"></td>
                    <td align="center"><input type="submit" name="cal" id="cal" value="Nuevo"></td>
                </tr>
            </table>
       </form> 
    </body>
</html>