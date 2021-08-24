<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Laboratorio 1</title>
    <meta http-equiv="Content-Type" content="textUhtml; charset=UTF-8">
</head>
<body bgcolor="orange">
	<h1>FORMULARIO PARA EL REGISTRO DE EMPLEADOR - BANCO AGRICOLA</h1>
    <form method="POST" action="" enctype="multipart/form-data" id="formulario" name="formulario"
     >
    <table border="1" cellpadding="8" widt="70">
        <tr>
        <td width="164" align="right"><u>N</u>ombres:</td>
        <td colspan="2">
            <input type="text" id="nombres" name="nombres" tabindex="1" accesskey="n" maxlength="40"
            size="30">
        </td>
        <td width="164" align="right"><u>A</u>pellidos:</td>
        <td colspan="2">
           <input type="text" id="apellidos" name="apellidos" tabindex="2" accesskey="n" maxlength="40"
            size="30">
        </td>
        <td align="center">
            Banco Agrícola
        </td>
        </tr>
        <tr>
            <td align="right"><u>F</u>otrografía:</td>
            <td colspan="2">
                <input type="file" name="fotop" id="fotop" tabindex="3">
            </td>
            <td align="rigth" width="164"><u>C</u>orreo electrónico:</td>
            <td colspan="2">
                <input type="email" id="correo" name="correo" maxlength="40" tabindex="4"
                    accesskey="c" size="30">
            </td>
            <td align="right" rowspan="10" colspan="2">
                <img src="imagenbanco.png" alt="Logo" title="Logo">
            </td>
        </tr>
        <tr>
            <td align="right"><u>C</u>ontraseña:</td>
            <td colspan="2">
                <input type="password" id="pass" name="pass" tabindex="5" accesskey="p"
                maxlength="20" size="20">
            </td>
            <td align="right"><u>C</u>ontraseña contraseña:</td>
            <td colspan="2">
                <input type="password" id="passconfirm" name="passconfirm" tabindex="5" accesskey="p"
                maxlength="20" size="30">
            </td>
        </tr>
        <tr>
            <td align="right" rowspan="4"><u>E</u>stado civil:</td>
            <td colspan="2" rowspan="4">
                <select id="estadocivil" name="estadocivil" tabindex="6">
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                </select>
            </td>
            <td align="right" width="164" rowspan="4">Recurso que posee:</td>
            <td align="left" width="140">Computadora</td>
            <td colspan="1">
                <input type="checkbox" id="computadora" name="computadora" tabindex="7"
                    value="computadorsi">
            </td>
        </tr>
        <tr>
            <td align="rigth">Laptop</td>
            <td colspan="1">
                <input type="checkbox" id="latop" name="latop" value="latopsi" tabindex="8">
            </td>
        </tr>
        <tr>
            <td align="rigth">Vehículo</td>
            <td colspan="1">
                <input type="checkbox" id="vehiculo" name="vehiculo" value="vehiculosi" tabindex="9">
            </td>
        </tr>
        <tr>
            <td align="rigth">Motocicleta</td>
            <td colspan="1">
                <input type="checkbox" id="motocicleta" name="motocicleta" value="motocicletai" tabindex="10">
            </td>
        </tr>

	<tr>
			<td width="164" align="right"><u>N</u>IT:</td>
			<td colspan="2">
                <input type="file" name="nie" id="nit" tabindex="11">
            </td>
			<td width="164" align="right"><u>D</u>UI:</td>
			<td colspan="2">
                <input type="file" name="dui" id="dui" tabindex="12">
            </td>
			
		</tr>
		<tr>
			<td  width="164" align="right"><u>N</u>úmero patronal del ISSS:</td>
		
			<td colspan="2">
                <input type="file" name="isss" id="isss" tabindex="13">
            </td>
			<td width="164" align="right"><u>D</u>irección:</td>
			<td colspan="2">
				<input type="text" id="direccion" name="direccion" tabindex="14" accesskey="n" maxlength="40"
            size="50">
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="164"><u><strong>D</u>epartamento:</strong></td>
			<td width="80"  valign="top">
				<Select name="estudiosI" id="estudiosI" tabindex="15" accesskey="d">
					<Option value="1">Ahuachapan</Option>
					<Option value="2">Santa Ana</Option>
					<Option value="3">Sonsonate</Option>
					<Option value="4">Usulután</Option>
					<Option value="5">San Miguel</Option>
					<Option value="6">Morazán</Option>
					<Option value="7">La Unión</Option>
					<Option value="8">La Libertad</Option>
					<Option value="9">Chalatenango</Option>
					<Option value="10">Cuscatlán</Option>
					<Option value="11">San Salvador</Option>
					<Option value="12">La Paz</Option>
					<Option value="13">Cabañas</Option>
					<Option value="14">San Vicente</Option>
					</Select>
				</td>
			<td width="164" align="right"><u>T</u>eléfono:</td>
			<td>
				<input type="text" id="telefono" name="telefono" tabindex="16" accesskey="n" maxlength="40"
            size="30">
			</td>
			<td align="right" valign="top" width="164"><u><strong>Á</u>rea de trabajo:</strong></td>
			<td width="80"  valign="top">
				<Select name="estudiosI" id="estudiosI" tabindex="17" accesskey="d">
					<Option value="1">Comercio</Option>
					<Option value="2">Desarrollo Económico</Option>
					<Option value="3">Desarrollo Productivo</Option>
					<Option value="4">Desarrollo Empresarial</Option>
					<Option value="5">Desarrollo Social</Option>
					<Option value="6">Poblacion y Desarrollo</Option>
					<Option value="7">Desarrollo Sostenible</Option>
					<Option value="8">Recursos Naturales</Option>
					<Option value="9">Estadísticas</Option>
					<Option value="10">Planificación para el Desarrollo</Option>
					
				</Select>
			</td>
		</tr>
		<tr>
			<td colspan="3" width="122" align="center">
				<input type="reset" id="borrar" value="Borrar" tabindex="18"/>
				</td>
				<td colspan="3" width="122" align="center">
					<input type="submit" id="enviar" value="Enviar" tabindex="19"/>
				</td>
			</tr>
    </table>
    </form>
    <h3>INTEGRANTES:</h3>
			<h4>Angel Efrain Ortiz Rodriguez</h4>
			<h4>Jose Alfredo Ruiz Reyes</h4>

</body>
</html>


