<!DOCTYPE html>
<html>
<body background="fondo2.jpg">
</body>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de usuarios</title>
</head>
<body>
	<center>
		<h3><font color="FFFFFF"size="4" face="Arial Black">REGISTRO DE USUARIOS</h3>
		<form id="frmregistro">
			<table>
				<tr>
					<td><font color="FFFFFF"size="4" face="Arial Black">DNI del usuario :</td><td><input type="number" id="txtdni" required></td>
				</tr>
				<tr>
					<td><font color="FFFFFF"size="4" face="Arial Black">Nombre del usuario :</td><td><input type="text" id="txtnombre" required></td>
				</tr>
				<tr>
					<td><font color="FFFFFF"size="4" face="Arial Black">Email del usuario :</td><td><input type="email" id="txtemail" required></td>
				</tr>
				<tr>
					<td><font color="FFFFFF"size="4" face="Arial Black">Password del usuario :</td><td><input type="password" id="txtpassword" required></td>
				</tr>

				<tr>
					<td><span id="mensaje"></span></td>
				</tr>

				<tr>
					<td><input type="submit" value="Registrar usuario"></td>
				</tr>
				<tr>
					<td><a href="index.php">Volver al inicio</a></td>
				</tr>
			</table>	
		</form>
		

	</center>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="app.js"></script>

</body>
</html>