<?php
class conectar{
	private $servidor="localhost:3308";
	private $usuario="root";
	private $bd="bd304";
	private $password="";
	public function conexion(){
		$conexion=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
		return $conexion;

	}
}

?>