<!doctype html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="MostrarDatos.php" name="datos">
            <table bgcolor="orange" width="600" border="1">
                <tr>
                    <td align="center">Nombre: </td>
                    <td align="center" >
                        <input type="text" id="nombre" name="nombre" width="300">
                    </td>
                    <td align="center" width="80">Ingrese cualquier número: </td>
                    <td align="center">
                        <input type="number" maxlength="20" minlength="-20" id="numero">
                    </td>
                </tr>
                <tr>
                    <td align="center" width="80">Carrera: </td>
                    <td>
                        <select name="carrera">
                            <option value="Licenciatura en Informática">Licenciatura en Informática</option>
                            <option value="Licenciatura en Administración de Empresas">Licenciatura en Administración de Empresas</option>
                            <option value="Licenciatura en Psicología">Licenciatura en Psicología</option>
                            <option value="Licenciatura en Contaduría Pública">Licenciatura en Contaduría Pública</option>
                            <option value="Técnico en Desarrollo de Software">Técnico en Desarrollo de Software</option>
                        </select>
                    </td>
                    <td align="center" width="80">Departamento: </td>
                    <td>
                        <select name="departamento">
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