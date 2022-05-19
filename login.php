<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];

$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario ='$usu' and contraseña = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
			
		header("Location: index.php");
		
	}
else
	{
	echo "<script> alert('Usuario, contraseña incorrectos');window.location= 'index.html' </script>";
	}
?>