<!doctype html>
<html>
    <head>
        <title>FORMULARIO</title>
        <meta charset="utf-8">
    </head>
    <?php
        $carrera = (string) $_POST['carrera'];
        $materias = (array) $_POST['materia'];
        $cciclo = (string) $_POST['ciclo'];
        $nnombre = (string) $_POST['nombre'];
        $lab1 = (int) $_POST['lab1'];
        $lab2 = (int) $_POST['lab2'];
        $lab3 = (int) $_POST['lab3'];
        $par1 = (int) $_POST['par1'];
        $par2 = (int) $_POST['par2'];
        $par3 = (int) $_POST['par3'];
        $lab1prom = $lab1 * 0.40;
        $lab2prom = $lab2 * 0.40;
        $lab3prom = $lab3 * 0.40;
        $par1prom = $par1 * 0.60;
        $par2prom = $par2 * 0.60;
        $par3prom = $par3 * 0.60;
        $prom1 = ($lab1prom + $par1prom) * 0.30; 
        $prom2 = ($lab2prom + $par2prom) * 0.30; 
        $prom3 = ($lab3prom + $par3prom) * 0.40; 
        $promedioFinal = (($prom1 +  $prom2 + $prom3));
        
        $mayorlab = (int) 0;
        $menorlab = (int) 0;
        
        if($lab1>$lab2)
        {
            $mayorlab=$lab1;
            $menorlab=$lab2;
        }
        else
        {
            $mayorlab=$lab2;
            $menorlab=$lab1;
        }
        if($mayorlab<$lab3)
            $mayorlab=$lab3;
        if($menorlab>$lab3)
        {
            $menorlab=$lab3;
        }
         
        
        
        $mayorpar = (int) 0;
        $menorpar = (int) 0;
        if($par1>$par2)
        {
            $mayorpar=$par1;
            $menorpar=$par2;
        }
        else
        {
            $mayorpar=$par2;
            $menorpar=$par1;
        }
        if($mayorpar<$par3)
            $mayorpar=$par3;
        if($menorpar>$par3)
        {
            $menorpar=$lab3;
        }


        
        $menorGlobal = (int) 0;
        $mayorGlobal = (int) 0;

        if ($mayorpar > $mayorlab):
            $mayorGlobal = $mayorpar;
        else:
            $mayorGlobal = $mayorlab;
        endif;

        if ($menorpar > $menorlab ):
            $menorGlobal = $menorlab;
        else:
            $menorGlobal = $menorpar;
        endif;
        
        $mensaje = (string) " ";
        if($promedioFinal >= 6.0 ):
            $mensaje = "Aprobado";
        else:
            $mensaje = "Reprobado";
        endif;
    ?>
    <body>
        <form action="PaginaInicio.php" method="post" name="datos"> 
            <table bgcolor="orange" border="1">
                <tr>
                    <td align="center">Carrera:</td>
                    <td>
                        <?php echo $carrera; ?>
                    </td>
                    <td align="center">Materia:</td>
                    <td>
                        <?php
                            foreach($materias as $materia){
                                echo "- " .$materia. "</br>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                <td align="center">Nombre:</td>
                    <td align="center">
                        <?php echo $nnombre; ?>
                    </td>
                    <td align="center">Ciclo:</td>
                    <td align="center">
                        <?php echo $cciclo; ?>
                    </td>
                </td>
                </tr>
                <tr>
                    <td align="center">Notas de laboratorios</td>
                    <td colspan="3">
                        Lab 1:
                            <?php  echo $lab1; ?>
                        </br>                            
                        Lab 2:
                            <?php  echo $lab2; ?>
                        </br>
                        Lab 3:
                            <?php  echo $lab3; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center">Notas de parciales</td>
                    <td colspan="3">
                        
                        Parcial 1:
                            <?php echo $par1?>
                        </br>
                        Parcial 2:
                            <?php echo $par2?>
                        </br>    
                        Parcial 3:
                            <?php echo $par3?>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                            Promedio:
                    </td>
                    <td align="center">
                        Promedio 1: <?php echo $prom1;?>
                        <br>
                        Promedio 2: <?php  echo $prom1;?>
                        <br>
                        Promedio 3: <?php echo $prom1;?>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        Promedio final:
                    </td>
                    <td>
                        <?php echo $promedioFinal; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center">Notas</td>
                    <td align="center">
                            Mayor : <?php echo $mayorGlobal?> <br>
                            Menor : <?php echo $menorGlobal?>
                    </td>
                </tr>
                <tr>
                    <td align="center">Estado:</td>
                    <td align="center">
                            <?php 
                                echo $mensaje;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" value="Volver a Inicio">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>