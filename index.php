<?php
require_once 'conexion.php';
require_once 'metodoscrud.php';
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
					<form action="procesos/insertar.php" method="POST">
						<table border="2px">

					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre"/></td>
					</tr>
					<tr>
						<td>apellido</td>
						<td><input type="text" name="apellido"/></td>
					</tr>

					<tr>
						<td><button>Agregar</button></td>
					</tr>
				</table>
				</form>
						<br><br>
					</table>
				<table border="2px">
					<tr>
						<td>Nombre</td>
						<td>apellido</td>
						<td>Actualizar</td>
						<td>Eliminar</td>
					</tr>
					
					<?php
					$obj= new metodos();
					$sql="SELECT id,nombre,apellido from usuarios";
					$datos=$obj->mostrarDatos($sql);
					foreach($datos as $key ){
					?>
					<tr>
						<td><?php echo $key['nombre']; ?></td>
						<td><?php echo $key['apellido']; ?></td>
						<td><a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a>
						</td>
						<td>
							<a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a>
						</td>
						
					</tr>
					<?php
				}

					?>
				</table>
			</center>
</body>
</html>
