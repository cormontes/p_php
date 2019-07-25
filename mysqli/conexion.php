<?php 
// Coexion a base de dastos con Mysqli
	$conexion =	new mysqli('localhost','root','','usuario');

	if($conexion->connect_errno){
		die("Hay un problema con el servidor");
	}else{
		echo "Conexion Exitosa";
	}



?>