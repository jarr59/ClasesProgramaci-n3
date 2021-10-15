<!doctype html>
<html>
    <head>
        <title>FORMULARIO</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="recibir.php" method="post" name="datos"> 
            <table bgcolor="orange" border="1">
                <tr>
                    <td align="center">Carrera:</td>
                    <td>
                        <select name="carrera" size="6">
                            <option value="Licenciatura en Informática">Licenciatura en Informática</option>
                            <option value="Licenciatura en Administración de Empresas">Licenciatura en Administración de Empresas</option>
                            <option value="Licenciatura en Psicología">Licenciatura en Psicología</option>
                            <option value="Licenciatura en Contaduría Pública">Licenciatura en Contaduría Pública</option>
                            <option value="Técnico en Desarrollo de Software">Técnico en Desarrollo de Software</option>
                            <option value="Técnico Gestor de Base De Datos">Técnico Gestor de Base De Datos</option>
                        </select>
                    </td>
                    <td align="center">Materia:</td>
                    <td>
                            <select name="materia[]" size="15" multiple>
                                <option value="LITERATURA">LITERATURA</option>
                                <option value="INGLÉS I">INGLÉS I</option>
                                <option value="MATEMÁTICAS">MATEMÁTICAS</option>
                                <option value="ANALISIS Y DISEÑO DE SISTEMAS">ANALISIS Y DISEÑO DE SISTEMAS</option>
                                <option value="PROGRAMACIÓN II">PROGRAMACIÓN II</option>
                                <option value="MATEMÁTICA I">MATEMÁTICA I</option>
                                <option value="ALGORITMOS">ALGORITMOS</option>
                                <option value="INTRODUCCIÓN A LA INFORMÁTICA">INTRODUCCIÓN A LA INFORMÁTICA</option>
                                <option value="SEMINARIO TALLER DE COMPETENCIAS">SEMINARIO TALLER DE COMPETENCIAS</option>
                                <option value="SEMINARIO DE GRAMÁTICA Y ORTOGRAFÍA">SEMINARIO DE GRAMÁTICA Y ORTOGRAFÍA</option>
                                <option value="MATEMÁTICA II">	MATEMÁTICA II</option>
                                <option value="PROGRAMACIÓN I">PROGRAMACIÓN I</option>
                                <option value="SOCIEDAD DE LA INFORMACIÓN">SOCIEDAD DE LA INFORMACIÓN</option>
                                <option value="TÉCNICAS DE INVESTIGACIÓN">TÉCNICAS DE INVESTIGACIÓN</option>
                                <option value="ESTADÍSTICAS Y PROBABILIDADES">ESTADÍSTICAS Y PROBABILIDADES</option>
                            </select>
                    </td>
                </tr>
                <tr>
                <td align="center">Nombre:</td>
                    <td align="center">
                        <input type="text" name="nombre" id="nombre">
                    </td>
                    <td align="center">Ciclo:</td>
                    <td align="center">
                        <select name="ciclo">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                        </select>
                    </td>
                </td>
                </tr>
                <tr>
                    <td align="center">Notas de laboratorios</td>
                    <td colspan="3">
                        N1:
                        <input type="number" name="lab1" min="1" max="10" value="1">
                        N2:
                        <input type="number" name="lab2" min="1" max="10" value="1">
                        N3:
                        <input type="number" name="lab3" min="1" max="10" value="1">
                    </td>
                </tr>
                <tr>
                    <td align="center">Notas de parciales</td>
                    <td colspan="3">
                        
                        N1:
                        <input type="number" name="par1" min="1" max="10" value="1">
                        N2:
                        <input type="number" name="par2"  min="1" max="10" value="1">
                        N3:
                        <input type="number" name="par3"  min="1" max="10" value="1">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>