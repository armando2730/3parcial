<?php
require_once '../conexion.php';
require_once '../metodoscrud.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$id=$_POST['id'];
$datos=array($nombre,$apellido,$id);
$obj= new metodos();
if($obj->actualizarDatosNombre($datos)==1){
	header("location:../index.php");
}else{
	echo "fallo al agregar";
}
?>