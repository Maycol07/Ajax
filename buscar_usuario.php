<?php 	
	session_start();
	if(isset($_POST["email"])){
		include "conexion.php";
		$email=$_POST["email"];
		$pass=$_POST["password"];

		$sql="Select * from tblusuario where email=? and clave=?";
		$sentencia=$cn->prepare($sql);
		$sentencia->execute([$email,$pass]);
		$usuario=$sentencia->fetch(PDO::FETCH_OBJ);
		$total=$sentencia->rowCount();
		if($total==0)
			echo "0"; //no existe el usuario
		else{
			$_SESSION["correo"]=$usuario->email;
			echo "1"; //el SI EXISTE
		}
	}
 ?>