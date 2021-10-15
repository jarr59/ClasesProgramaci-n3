<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Datos personales</title>
    </head>
    <?php
        $nombre =(string) $_POST['frmNombre'];
        $apellido =(string) $_POST['frmApellido'];
        $genero =(string) $_POST['frmGen'];
        $pais =(string) $_POST['frmPais'];
        $edad =(int) $_POST['frmEdad'];
        $cursos =(array) $_POST['frmCursos'];
        $clasificacion = (string) $_POST['frmClas'];
        $cuota = (int) $_POST['frmCuota'];

        $total = (float) 0.0;
        $descuento = (string) "";
        $totaldecuento = (float) 0.0;

        if($pais == "ES" or $pais == "GU" or $pais == "HN"):
            if($clasificacion == "A"):
                $descuento = "60%";
                $totaldecuento = ($cuota *  0.60);
                $total =  $cuota - $totaldecuento;
            elseif($clasificacion == "B"):
                $descuento = "40%";
                $totaldecuento = ($cuota *  0.40);
                $total =  $cuota - $totaldecuento; 
            elseif($clasificacion == "C"):
                $descuento = "20%";
                $totaldecuento = ($cuota *  0.20);
                $total =  $cuota - $totaldecuento; 
            endif;
        endif;
        if ($pais == "CR"):
            if($clasificacion == "A"):
                $descuento = "40%";
                $totaldecuento = ($cuota *  0.40);
                $total =  $cuota - $totaldecuento;
            elseif($clasificacion == "B" or $clasificacion == "C" ):
                $descuento = "20%";
                $totaldecuento = ($cuota *  0.20);
                $total =  $cuota - $totaldecuento;
            endif;
        endif;
        if ($pais == "BE" or $pais == "NI"):
            $descuento = "15%";
            $totaldecuento = ($cuota *  0.15);
            $total =  $cuota - $totaldecuento;
        endif;
    ?>
    <body>
        <form method="POST" action="datos.php" name="datos">
        <table border="1" align="center" width="600">
                <tr>
                    <td colspan="2" align="center" bgcolor="lightblue">
                        <h3>Datos personales</h3>
                    </td>
                    <td rowspan="10" align="center" bgcolor="lightblue" >
                        <img src="Logo_UMA.png" width="169" height="212" 
                        alt="Logo">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue" width="150">Nombre: </td>
                    <td bgcolor="lightblue" width="350">
                        <?php echo $nombre;?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Apellido: </td>
                    <td bgcolor="lightblue">
                        <?php echo $apellido;?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Género</td>
                        <td bgcolor="lightblue">
                        <?php echo $genero;?>
                        </td>
                </tr>
                <tr>
                        <td bgcolor="lightblue">País: </td>
                        <td bgcolor="lightblue">
                        <?php 
                            if($pais == "ES"):
                                echo "El Salvador";
                            elseif ($pais == "GU"):
                                echo "Guatemala";
                            elseif ($pais == "HN"):
                                echo "Honduras";
                            elseif ($pais == "NI"):
                                echo "Nicaragua";
                            elseif ($pais == "CR"):
                                echo "Costa Rica";
                            elseif ($pais == "BE"):
                                echo "Belice";
                            endif;
                        ?>
                        </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Edad: </td>
                    <td bgcolor="lightblue">
                        <?php echo $edad ;?>
                    </td>
                </tr>
                <tr>
                        <td bgcolor="lightblue">Cursos a matricular</td>
                        <td bgcolor="lightblue">
                            <?php 
                                foreach($cursos as $valor){
                                    echo "- " .$valor. "</br>";
                                }
                            ?>
                        </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Clasificación</td>
                        <td bgcolor="lightblue">
                            <?php
                                 if($clasificacion == "A"):
                                    echo "A";
                                elseif ($clasificacion == "B"):
                                    echo "B";
                                elseif ($clasificacion == "C"):
                                    echo "C";
                                endif;
                            ?>
                        </td>
                </tr>
                
                <tr>
                    <td bgcolor="lightblue">Cuota</td>
                    <td bgcolor="lightblue">
                        <?php
                            echo $cuota; 
                         ?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Descuento <?php
                            echo $descuento; 
                         ?></td>
                    <td bgcolor="lightblue">
                        <?php
                            echo $totaldecuento; 
                         ?>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Cuota con descuento</td>
                        <td bgcolor="lightblue">
                        <?php
                            echo $total; 
                         ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="lightblue">
                        <input type="submit" value="Nuevo">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>