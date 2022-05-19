<?php
$conn = new mysqli("localhost","admin_moto","m0t0tr4ck**","mototrack");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>