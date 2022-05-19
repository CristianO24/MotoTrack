<?php 
include_once("conexion.php");
include_once("index.php");

$id_cliente = $_GET['id_cliente'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM cliente WHERE id_cliente=$id_cliente");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $CC = $mostrar['cod'];
    $Nombre = $mostrar['nom'];
    $Teléfono = $mostrar['correo'];
	$Correo = $mostrar['tel'];
}
?>
<html>
<head>    
		<title>Editar</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar usuario</th></tr>
        <tr> 
                <td>CC</td>
                <td><input type="text" name="txtCC" required></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Teléfono</td>
                <td><input type="number" name="txttelefono" required></td>
            </tr>
            <tr> 
                <td>Correo</td>
                <td><input type="text" name="txtcorreo" required></td>
            </tr>
            <tr> 				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $codigo1 = $_POST['txtcodigo'];
	
	$nombre1 	= $_POST['txtnombre'];
    $correo1 	= $_POST['txtcorreo'];
    $telefono1 	= $_POST['txttelefono']; 
      
    $querymodificar = mysqli_query($conn, "UPDATE usuarios SET nom='$nombre1',correo='$correo1',tel='$telefono1' WHERE cod=$codigo1");

  	echo "<script>window.location= 'index.php' </script>";
    
}
?>
	