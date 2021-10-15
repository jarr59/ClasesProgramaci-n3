<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Datos personales</title>
    </head>
    <body>
        <form method="post" action="recibir_datos.php" name="datos">
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
                        <input type="text" name="frmNombre" size="25" maxlength="25">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue" width="150">Apellido: </td>
                    <td bgcolor="lightblue" width="350">
                        <input type="text" name="frmApellido" size="25" maxlength="25">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue" width="150">Género: </td>
                        <td bgcolor="lightblue" width="350">
                            <input type="radio" name="frmGen" value="Masculino">Masculino</br>
                            <input type="radio" name="frmGen" value="Femenino">Femenino
                        </td>
                </tr>
                <tr>
                        <td bgcolor="lightblue">País: </td>
                        <td bgcolor="lightblue">
                            <select name="frmPais" size="1">
                                <option value="ES">El Salvador</option>
                                <option value="GU">Guatemala</option>
                                <option value="HN">Honduras</option>
                                <option value="NI">Nicaragua</option>
                                <option value="CR">Costa Rica</option>
                                <option value="BE">Belice</option>
                            </select>
                        </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue" width="150">Edad: </td>
                    <td bgcolor="lightblue">
                        <input type="number" name="frmEdad"  min="18" max="100" value="18">
                    </td>
                </tr>
                <tr>
                        <td bgcolor="lightblue">Cursos a matricular</td>
                        <td bgcolor="lightblue">
                            <select name="frmCursos[]" size="5" multiple>
                                <option value="Literatura">Literatura</option>
                                <option value="Programacion">Programación</option>
                                <option value="Matematicas">Matemáticas</option>
                                <option value="Ingles">Inglés</option>
                                <option value="Didactica">Didactica</option>
                            </select>
                        </td>
                </tr>
                <tr>
                    <td bgcolor="lightblue">Clasificación</td>
                        <td bgcolor="lightblue">
                            <input type="radio" name="frmClas" value="A">A</br>
                            <input type="radio" name="frmClas" value="B">B</br>
                            <input type="radio" name="frmClas" value="C">C</br>
                        </td>
                </tr>
                
                <tr>
                    <td bgcolor="lightblue">Cuota</td>
                    <td bgcolor="lightblue">
                        <input type="number" name="frmCuota" min="0" max="1000" value="0">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="lightblue">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Borrar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>