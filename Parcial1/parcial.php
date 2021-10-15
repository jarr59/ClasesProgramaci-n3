<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Laboratorio 1</title>
    <meta http-equiv="Content-Type" content="textUhtml; charset=UTF-8">
</head>
<body bgcolor="orange">
	<h1>Formulario de estudiante UMA</h1>
    <form method="POST" action="" enctype="multipart/form-data" id="formulario" name="formulario">
        <table cellpading="4" width="900" border="2">
            <td align="center"><i>Universidad Modular Abierta - UMA</i></td>
            <td align="center"><b>Ciclo 02</b></td>
            <td align="center"><b>Año: 2021</b></td>
            <td align="center" rowspan="1" colspan="1">
                <img src="logo.png" alt="Logo" title="Logo" width="80">
            </td>
            <tr>
                <td align="center"><i>Nombres:</i></td>
                <td colspan="1">
                    <input type="text" id="nombre" name="nombre" tabindex="1" accesskey="n" maxlength="100"
                    size="30">
                </td>
                <td align="center"><i>Apellidos:</i></td>
                <td colspan="1">
                    <input type="text" id="apellidos" name="apellidos" tabindex="2" accesskey="a" maxlength="100"
                    size="30">
                </td>
            </tr>

            <tr>
                <td align="center"><i>Fotografía del estudiante:</i></td>
                <td colspan="1">
                    <input type="file" id="foto" name="foto" tabindex="3" accesskey="f"
                    size="30">
                </td>
                <td align="center"><i>Correo electrónico:</i></td>
                <td colspan="1">
                    <input type="text" id="correo" name="correo" tabindex="4" accesskey="c" maxlength="100"
                    size="30">
                </td>
            </tr>
            
            <tr>
                <td align="center"><i><u>N°</u> DUI:</i></td>
                <td colspan="1">
                    <input type="text" id="dui" name="dui" tabindex="5" accesskey="d" maxlength="100"
                    size="30">
                </td>
                <td align="center"><i>Institución donde estudio Bachillerato:</i></td>
                <td colspan="1">
                    <input type="text" id="bachillerato" name="bachillerato" tabindex="6" accesskey="i" maxlength="200"
                    size="30">
                </td>
            </tr>

            
            <tr>
                <td align="center"><i>Título de Bachiller:</i></td>
                <td colspan="1">
                    <input type="file" id="titulo" name="titulo" tabindex="7" accesskey="t">
                </td>
                <td align="center"><i>Facultada:</i></td>
                <td colspan="1">
                    <select id="facultad" name="facultad" tabindex="8" accesskey="l">
                        <option value="1">Ciencias Económicas</option>
                        <option value="2">Jurisprudencia y Ciencias Sociales</option>
                        <option value="3">Ciencias y Humanidades</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><i>Carrera:</i></td>
                <td colspan="2" align="center" >
                    <select id="carrera" name="carrera" accesskey="r" tabindex="8">
                        <option value="1">Medicina</option>
                        <option value="2">Psiquitría</option>
                        <option value="3">Física</option>
                        <option value="4">Arquitectura</option>
                        <option value="5">Ingenieria de Telecomunicaciones</option>
                        <option value="6">Ingenieria en sistemas</option>
                        <option value="7">Ingenieria industrial</option>
                        <option value="8">Ingenieria civil</option>
                        <option value="9">Ingenieria en ciberseguridad</option>
                        <option value="10">Periodismo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Enviar" id="enviar" name="enviar" accesskey="e" tabindex="9">
                </td>
                
                <td align="center" colspan="2">
                    <input type="reset" value="Borrar" id="borrar" name="borrar" accesskey="b" tabindex="10">
                </td>
            </tr>
        </table>
    </form>
    <?php
        echo "<br>Materia: Programación III";
        echo "<br>José Alfredo Ruíz Reyes";
        $a = (float) 10.6;
        $b = (float) 15.7;
        $c = (float) 40.9;
        $d = (float) 30.7;
        $x = (float) 0.0;
        if($c > 0 && $d > 0):
            $cElevado = $c**3;
            $dElevado = $d**2;
            $x = (((3*$cElevado) + (7*$b) - (12 * $a)) / ($dElevado - 441)) + (6 * ($a*$b));
        endif;
        echo "<br>Resultado de la operacion:  $x";
        if($x % 2 == 0):
            echo "<br> El número $x es Par";
        else: 
            echo "<br> El número $x es Impar";
        endif;
    ?>
</body>
</html>