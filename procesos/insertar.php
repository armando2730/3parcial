<?php
require_once '../conexion.php';
require_once '../metodoscrud.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$datos=array($nombre,$apellido);
$obj= new metodos();
if($obj->insertarDatosNombre($datos)==1){
	header("location:../index.php");
}else{
	echo "fallo al agregar";
}

?>