<?php 
	session_start();
	if(isset($_SESSION['correo']))
		header("location:principal.php");

 ?>
<!DOCTYPE html>
<html>
<body background="tokio.jpg">
</body>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Iniciar sesion</title>
</head>
<body>
	<center>
		<form id="frmlogin">
			<table>
				<tr>
					<td>
						<font color="FFFFFF"size="5" face="verdana">USUARIO :</td>
					<td><input type="email" name="txtemail" id="txtemail"></td>
				</tr>
				<tr>
					<td>
						<font color="FFFFFF"size="5" face="verdana">PASSWORD :</td>
					<td><input type="password" name="txtpassword" id="txtpassword"></td>
				</tr>


				<tr>
					<span style="color:red;" id="error"></span>		
				</tr>


				<tr>
					<td><input type="submit" value="iniciar sesion"></td>
				</tr>
				<tr>
					<td><a href="frmregistro.php"> Registrarse</a></td>
				</tr>
			</table>
		</form>
	</center>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="app.js"></script>

</body>
</html>