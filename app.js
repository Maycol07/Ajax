console.log("probando");
$("#frmlogin").submit(function(e){
	mensaje=document.getElementById("error");
	mensaje.innerHTML="";
	let email=$("#txtemail").val();
	let password=$("#txtpassword").val();

	$.post("buscar_usuario.php",{email,password},function(response){
        console.log(response);
		if(response==0)
			mensaje.innerHTML="El usuario no existe"
		else if(response==1)
			window.location.replace("principal.php");
	})
	e.preventDefault();//para evitar que la pagina se recargue al hacer clic en el boton
})


$("#frmregistro").submit(function(e){
	mensaje=document.getElementById("mensaje");
	mensaje.innerHTML="";

	let dni=$("#txtdni").val();
	let nombre=$("#txtnombre").val();
	let email=$("#txtemail").val();
	let password=$("#txtpassword").val();
	
	$.post("proceso_registrar.php",{dni,nombre,email,password},function(response){
        console.log(response);
		if(response==0)
			mensaje.innerHTML="Error, el usuario no se registro.";
		else if(response==1){
			mensaje.innerHTML="El usuario se registro correctamente.";
			document.getElementById("txtdni").value="";
			document.getElementById("txtnombre").value="";
			document.getElementById("txtemail").value="";
			document.getElementById("txtpassword").value="";
		}
	})
	e.preventDefault();//para evitar que la pagina se recargue al hacer clic en el boton
})