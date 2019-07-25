<?php 
// Coexion a base de dastos con Mysqli
	$conexion =	new mysqli('localhost','root','','usuario');

	if($conexion->connect_errno){

		die("Hay un problema con el servidor");

	}else{

		$sql = 'insert into usuarios (id,nombre,correo) values (null,"luis","pr@correo.com")';
		$resultado = $conexion->query($sql);
		

		if($conexion->affected_rows >= 1){
			echo "Filas Agregadas " . $conexion->affected_rows;
		}

	}



?>