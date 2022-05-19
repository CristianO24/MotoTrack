<?php
include_once("conexion.php"); 
?>
<!--Busca por VaidrollTeam para más proyectos. -->
<html>
<head>    
		<title>Usuarios</title>
		<meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
	<img src="./logo.png">
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
		</form>
		</div>
			<tr><th colspan="5"><h1>LISTAR USUARIOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>id_cliente</th>
			<th>CC</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT id_cliente,CC,nombre,Telefono,Correo FROM cliente where nombre like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM usuarios");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$mostrar['id_cliente']."</td>";
            echo "<td>".$mostrar['CC']."</td>";
            echo "<td>".$mostrar['nombre']."</td>";    
			echo "<td>".$mostrar['Telefono']."</td>";
            echo "<td>".$mostrar['Correo']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?id_cliente=$mostrar[id_cliente]\">Modificar</a> | <a href=\"eliminar.php?id_cliente=$mostrar[id_cliente]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombre]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo usuario</th></tr>
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
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

