<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Creacion de Formularios</title>
    <meta http-equiv="Content-Type" content="textUhtml; charset=UTF-8">
</head>
<body bgcolor="#94CBED">
    <h1>Formulario de Muestra</h1>
    <form name="formulario" id="formulario" method="post" action="" enctype="multipart/form-data">
		<table width="70" border="1" cellpadding="5">
			<tr>
				<td align="right" width="164"><u>N</u>ombre:</td>
				<td colspan="2">
					<input type="text" name="nombreUsuario" id="nombreUsuario" size="20" maxlenght="50" tabindex="1"
						accesskey="n">
				</td>
				<td width="122" align="right"><u>C</u>ontraseña:</td>
				<td width="77" colspan="2">
					<input type="password" name="password" id="password" size="20" maxlenght="50"
						accesskey="a"/>
				</td>
			</tr>
			
			<tr>
				<td align="right" width="164"><u>U</u>reve descipcion</td>
				<td rowspan="2" colspan="3">
					<textarea name="opinion" cols="30" rows="5" wrap="virtual" tabindex="3"
					accesskey="b">Escriba breve descripcion</textarea>
				</td>
				<td rowspan="2" colspan="2"></td>
			</tr>
			<tr>
				<td width="164"></td>
			</tr>
			<tr>
				<td align="right" width="164"><u>M</u>ayor de Edad:</td>
				<td width="80">
					<input type="checkbox" name="adulto" value="si" checked="checked" tabindex="4"
					accesskey="m"/>
				</td>
				<td width="101" align="right"><u>G</u>énero: Masculino</td>
				<td width="115">
					<input type="radio" name="genero" id="generoM" value="m" checked="checked" tabindex="5"
					accesskey="g"/>
				</td>
				<td width="170" align="right"><u>I</u>engresos: Menos de $400</td>
				<td width="77">
					<input type="radio" name="sueldo" id="sueldoBajo" value="10"
					checked="checked" tabindex="7" accesskey="i"/>
				</td>
				
				<tr>
					<td width="164"></td>
					<td width="80"></td>
					<td right="right" width="101">Femenino</td>
					<td width="115">
						<input type="radio" name="genero" id="generoF" value="f" tabindex="6"/>
					</td>
					<td width="112" align="right">$400 - $1000</td>
					<td width="77">
						<input type="radio" name="sueldo" id="sueldoMedio" value="1020" tabindex="8"/>
					</td>
				</tr>
				<tr>
					<td width="164"></td>
					<td colspan="3"></td>
					<td width="122" align="right">Mas de $1000</td>
					<td width="77">
						<input type="radio" name="sueldo" id="sueldoAlto" value="20" tabindex="9"/>
					</td>
				</tr>
				<tr>
				<td align="right" height="7" width="164"><u>H</u>oja de Vida:</td>
				<td align="7" colspan="3">
					<input type="file" name="archivo" id="archivo" size="30" maxlenght="100" tabindex="10"
					accesskey="h"/>
				</td>
				<td colspan="2" height="7"></td>
				</tr>
				
				<tr>
					<td align="right" rowspan="2" valing="top" width="164"><u>E</u>studios de Interes:</td>
					<td width="80" rowspan="2" valing="top">
						<select name="estudiosI" id="estudiosI" tabindex="11" accesskey="e">
							<option value="1">Economia</option>
							<option value="2">Filosofia</option>
							<option value="3">Ingenieria</option>
							<option value="4">Tecnologia</option>
							<option value="5">Comunicaciones</option>
							<option value="6">Otros</option>
						</select>
					</td>
					<td width="101" align="right"><u>P</u>asatimepos:</td>
					<td width="115" rowspan="2">
						<select name="pasatiempo" id="pasatiempo" size="4" tabindex="12" accesskey="p">
							<option value="1">Chat</option>
							<option value="2">Juegos</option>
							<option value="3">Arte</option>
							<option value="4">Cine</option>
							<option value="5">Deporte</option>
							<option value="6">Otros</option>
							
						</select>
					</td>
					<td colspan="2" rowspan="2"></td>
				</tr>
			<tr>
				<td width="101"></td>
			</tr>		
			<tr>
				<td colspan="4">
					<input type="submit" name="enviar" id="enviar" value="enviar" tabindex="13"/>
				</td>
				<td colspan="2">
					<input type="reset" id="borrado" value="Borrar" tabindex="14"/>
				</td>
			</tr>
		</tr>
		</table>
		<input type="hidden" name="escondido" id="escondido" value="oculto">
    </form>
</body>
</html>