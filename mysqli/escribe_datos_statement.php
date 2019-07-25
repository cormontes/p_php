<?php 
// Coexion a base de dastos con Mysqli
	$conexion =	new mysqli('localhost','root','','usuario');

	if($conexion->connect_errno){

		die("Hay un problema con el servidor");

	}else{

		$statement = $conexion->prepare("insert into usuarios (id,nombre,correo) values (?,?,?)");
		// replacamos los placeholder ? con los calores que queremos usar
		// s = string
		// i = integer
		// d = double
		// 
		$statement->bind_param('iss', $id, $nombre, $correo);
		$id = null;


		if(isset($_GET['nombre']) && isset($_GET['correo'])){
			$nombre = $_GET['nombre'];
			$correo = $_GET['correo'];
		}

		$statement->execute();

		if($conexion->affected_rows >= 1){
			echo "Filas Agregadas " . $conexion->affected_rows;
		}else{
			echo "No se agrego nada";
		}

	}

?>