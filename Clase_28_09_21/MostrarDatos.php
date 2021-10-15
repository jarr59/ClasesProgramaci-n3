<!doctype html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">
    </head>
    <?php
        $nombre = (string) $_POST['nombre'];
        $carrera = (array) $_POST['carrera'];
    ?>
    <body>
        <form method="post" action="datos.php" name="datos">
            <table bgcolor="orange" width="600" border="1">
                <tr>
                    <td align="center">Nombre: </td>
                    <td align="center" >
                        <?php echo $nombre ?>
                    </td>
                    <td align="center" width="80">Ingrese cualquier número: </td>
                    <td align="center">
                        <input type="number" maxlength="20" minlength="-20" id="numero">
                    </td>
                </tr>
                <tr>
                    <td align="center" width="80">Carrera: </td>
                    <td>
                    <?php echo $carrera ?>
                    </td>
                    <td align="center" width="80">Departamento: </td>
                    <td>
                        <select name="departamento[]">
                            <option value="Santa Ana">Santa Ana</option>
                            <option value="Ahuachapán">Ahuachapán</option>
                            <option value="Sonsonate">Sonsonate</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">Genero:</td>
                    <td align="center">
                        <input type="radio" name="genero" id="genero" value="hombre">Hombre
                        <input type="radio" name="genero" id="genero" value="mujer">Mujer
                    </td>
                    
                    <td align="right">
                            <input type="submit" value="Enviar">
                        </td>   
                    <td align="left">
                            <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>