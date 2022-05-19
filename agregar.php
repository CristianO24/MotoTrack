<?php include_once("conexion.php"); 
    
	$CC 	= $_POST['txtCC'];
    $nombre 	= $_POST['txtnombre'];
    $correo 	= $_POST['txtcorreo'];
    $telefono 	= $_POST['txttelefono'];
    
    $id = mysqli_query($conn, "Select max(id_cliente) from cliente");
    $id = mysqli_fetch_row($id);

    $id = $id[0] + 1;
        
	mysqli_query($conn, "INSERT INTO cliente(id_cliente,CC,nombre,Telefono,Correo) VALUES('$id','$CC','$nombre','$correo','$telefono')");
    
header("Location:index.php");
	

?>
