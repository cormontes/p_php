<?php

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function LimpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function  pagina_actual(){
	return isset($_GET['p']) ? $_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 0) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("select  SQL_CALC_FOUND_ROWS * from articulos limit $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}


?>
