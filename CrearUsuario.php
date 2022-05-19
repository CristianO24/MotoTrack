<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
$rol    = $_POST["txtrol"]:

$queryusuario = mysqli_query($conn,"INSERT INTO usuarios VALUES(  ='$usu' and contraseña = '$pass'");
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