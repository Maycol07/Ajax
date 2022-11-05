<?php 
	session_start();
	if(!isset($_SESSION['correo']))
		header("location:index.php");

 ?>


<!DOCTYPE html>
<html>
<body background="fondo3.jpg">
</body>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><font color="FFFFFF"size="4" face="Arial Black">PAGINA 01</title>
</head>
<body>
	<center>
		<h1><font color="FFFFFF"size="4" face="Arial Black">PAGINA 1 DEL SITIO</h1>
		<h3><font color="FFFFFF"size="4" face="Arial Black">Usuario: <?php echo $_SESSION["correo"]; ?>   </h3>
		<a href="pagina2.php"><font color="FFFFFF"size="4" face="Arial Black">Ir a la pagina 2</a><br>	
		<a href="principal.php"><font color="FFFFFF"size="4" face="Arial Black">Ir a la principal</a><br>	
		<a href="cerrar.php"><font color="FFFFFF"size="4" face="Arial Black">Cerrar sesion</a>		
	</center>
	
</body>
</html>