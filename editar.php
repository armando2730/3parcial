<?php
require_once 'conexion.php';
$obj= new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT nombre,apellido from usuarios where id='$id'";
$result=mysqli_query($conexion,$sql);
$ever=mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr><center><h3><u>REGISTRO</u></h3></center><hr>
		 
			<center>
				<center>
					<form action="procesos/actualizar.php" method="POST">
						<table border="2px">
					<input type="text" hidden=""
					value="<?php echo $id ?>" name="id">
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre" value="<?php echo $ever[0]?>"></td>
					</tr>
					<tr>
						<td>apellido</td>
						<td><input type="text" name="apellido" value="<?php echo $ever[1]?>"></td>
					</tr>

					<tr>
						<td><button>Agregar</button></td>
					</tr>
				</table>
				</form>
						<br><br>
</center>
</center>
</body>
</html>