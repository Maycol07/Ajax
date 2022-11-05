<?php 
	session_start();
	if(!isset($_SESSION['correo']))
		header("location:index.php");

 ?>


<!DOCTYPE html>
<html>
<head>
<body background="Fondo1.jpg">
</body>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAGINA PRINCIPAL DE LA APLICACION</title>
</head>
<body>
	<center>
		<h1><font color="FFFFFF"size="4" face="Times New Roman">PAGINA PRINCIPAL DEL SITIO</h1>
		<h3><font color="FFFFFF"size="4" face="Times New Roman">Bienvenido: <?php echo $_SESSION["correo"]; ?>   </h3>
		<a href="pagina1.php"><font color="FFFFFF"size="4" face="Times New Roman">Ir a la pagina 1</a><br>	
		<a href="cerrar.php"><font color="FFFFFF"size="4" face="Times New Roman">Cerrar sesion</a>		
	</center>	
</body>
</html>