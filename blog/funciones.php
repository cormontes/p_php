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

// Si variable p esta setiada traer su valor si su valor sera 1
function  pagina_actual(){
	return isset($_GET['p']) ? $_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("select  SQL_CALC_FOUND_ROWS * from articulos limit $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare("SELECT FOUND_ROWS() as total");
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
// Para el Single.php

function id_articulo($id){
	// Limpiara el valor de id y lo retornara como numero entero
	return (int)LimpiarDatos($id);
}

function  obtener_post_por_id($conexion, $id){
	$resultado = $conexion->prepare("SELECT * FROM articulos where id = $id limit 1");
	$resultado->execute();
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}


// Extraer partes de la fecha y convertirlo a caracter
function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
	//Extrae dia de la variable $timestamp
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de ". $meses[$mes] . " del $year";
	return $fecha; 
}

?>
