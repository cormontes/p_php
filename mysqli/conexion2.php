<?php 
// Coexion a base de dastos con Mysqli
	$conexion =	new mysqli('localhost','root','','usuario');

	if($conexion->connect_errno){
		die("Hay un problema con el servidor");
	}else{
		$sql = "select * from usuarios";

		$resultado = $conexion->query($sql);

		if($resultado->num_rows){

			while($fila = $resultado->fetch_assoc()){
				echo $fila['id'] . '-' .$fila['nombre'] . "<br>";
			}
		}else{
			echo 'No hay datos para mostrar';
		}
	}



?>