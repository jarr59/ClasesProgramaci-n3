<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Creacion de Formularios</title>
    <meta http-equiv="Content-Type" content="textUhtml; charset=UTF-8">
</head>
<body>
    <h1>Practica 16 de agosto</h1>
    <h2>Nombre completo del estudiante</h2>
    <form method="post" enctype="multipart/form-data" action="" id="formulario" name="formulario">
    <table border="1" width="600" cellpadding="5">
        <tr>
            <td align="right" width="164"><u>N</u>ombre:</td>
        <td colspan="2">
            <input type="text" id="nombre" name="nombre" accesskey="n" tabindex="1" 
                maxlength="20" size="20">
        </td>
        <td align="right" width="164"><u>A</u>pellido:</td>
        <td colspan="2">
            <input type="text" id="apellido" name="apellido" maxlength="20" size="20"
            tabindex="2" accesskey="a">
        </td>
        <td align="center">
            Institución
        </td>
        </tr>
        <tr>
            <td align="right" width="164"><u>E</u>mail:</td>
            <td colspan="2">
                <input type="text" id="email" name="email" size="20" maxlength="30"
                    accesskey="e" tabindex="3">
            </td>
            <td align="right" width="164"><u>C</u>ontraseña:</td>
            <td colspan="2">
                <input type="password" id="password" name="password" maxlength="20"
                    size="20" accesskey="p" tabindex="4">
            </td>
            <td align="right" rowspan="7">
                <img src="logo_UMA.png" alt="Logo UMA" title="Logo UMA">
            </td>
        </tr>
        <tr>
            <td align="right" width="164"><u>D</u>epartamento:</td>
            <td colspan="1">
                <select name="departamentos" id="departamentos" tabindex="5" accesskey="e">
                    <option value="1">Ahuachapan</option>
                    <option value="2">Cabañas</option>
                    <option value="3">Chalatenango</option>
                    <option value="4">Cuscatlán</option>
                    <option value="5">La libertad</option>
                    <option value="6">La Paz</option>
                    <option value="7">La Unión</option>
                    <option value="8">Morazán</option>
                    <option value="9">San Miguel</option>
                    <option value="10">San Salvador</option>
                    <option value="11">San Vicente</option>
                    <option value="12">Santa Ana</option>
                    <option value="13">Sonsonate</option>
                    <option value="14">Usulután</option>
                </select>
                <td align="right" width="164"><u>D</u>irección:</td>
            </td>
            <td colspan="3">
                <input type="text" id="direccion" name="direccion" maxlength="40" size="32"
                accesskey="d" tabindex="6">
            </td>
        </tr>
        <tr>
            <td align="right" width="164"><u>T</u>eléfono:</td>
            <td colspan="2">
                <input type="text" id="telefono" name="telefono" maxlength="20" size="20"
                    tabindex="7" accesskey="t">
            </td>
            <td align="right" width="164"><u>C</u>elular:</td>
            <td colspan="2">
                <input type="text" id="celular" name="celular" maxlength="20" size="20"
                    tabindex="8" accesskey="c">
            </td>
        </tr>
        <tr>
            <td align="right" width="164" rowspan="2"><u>G</u>enero:</td>
            <td align="right">Masculino</td>
            <td>
                <input type="radio" id="masculino" name="genero" value="m" tabindex="9" checked="true">
            </td>
            <td align="right" width="164" rowspan="2"><u>I</u>nformación personal:</td>
            <td>
                <input type="checkbox" name="duicheck" value="sidui" tabindex="10" accesskey="i">
            </td>
            <td align="left" width="164"><u>D</u>UI</td>
        </tr>
        <tr>
            <td align="right" width="164">Femenino</td>
            <td>
                <input type="radio" id="femenino" name="genero" value="f" tabindex="11"
                    accesskey="f">
            </td>
            <td>
                <input type="checkbox" id="nit" name="nit" value="sinit" tabindex="12" 
                accesskey="n">
            </td>
            <td align="left" width="164"><u>N</u>IT</td>
        </tr>
        <tr>
            <td align="right" width="164">¿Porqué desea trabajar con nostros?</td>
            <td colspan="5">
                <textarea name="justificacion" id="justificacion" rows="5" cols="65" tabindex="13"
                    >Escriba una breve descripción
                </textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Enviar" tabindex="14" id="enviar" name="enviar">
            </td>
            <td colspan="3" align="center">
                <input type="reset" value="Borrar" tabindex="15" id="borrar" name="borrar">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>