<?php
include_once("conexion.php");
 
$id_cliente = $_GET['id_cliente'];
 
mysqli_query($conn, "DELETE FROM cliente WHERE id_cliente=$id_cliente");
 
header("Location:index.php");

?>