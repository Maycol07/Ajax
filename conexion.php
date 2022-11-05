<?php 
	$usuario="root";
	$basedatos="bdAcceso";
	try {
		$cn=new PDO("mysql:host=localhost;dbname=".$basedatos,$usuario,);
		//echo "Exito";
	} catch (Exception $e) {
		echo "Error:" . $e->getMessage();
	}



 ?>