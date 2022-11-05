<?php 
	if(isset($_POST["dni"])){
		include "conexion.php";
		$dni=$_POST["dni"];		
		$nom=$_POST["nombre"];
		$email=$_POST["email"];
		$pass=$_POST["password"];

		$sql="insert into tblusuario values(?,?,?,?)";
		$sentencia=$cn->prepare($sql);
		$resultado=$sentencia->execute([$dni,$nom,$email,$pass]);
		if($resultado)
			echo "1"; //el usuario se registro
		else
			echo "0"; //el usuario NO  se registro
	}
 ?>