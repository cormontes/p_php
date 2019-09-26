<?php 
	require 'funciones.php';
	// Cantidas de fotogracias a Mostrar
	$fotos_por_pagina = 8;

	// Si la variable p esta seriada entonces obtendra el valor de la variable tipo entero  si no la variable sera Cero
	$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);

	// Si pagina altual es mayor que 1  hara la operancion sino sera Cero
	$inicio = ($pagina_actual > 1) ? ($pagina_actual * $fotos_por_pagina) - $fotos_por_pagina : 0 ;

	// Se manda a llamar la funcion de la conexion a Base de Datos
	$conexion = conexion('galerias_practica','root','');

	if(!$conexion){
		die();
	}

	$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina ");
	$statement->execute();
	$fotos = $statement->fetchAll();

	if(!$fotos){
		header('Location: index.php');
	}

	$statement = $conexion->prepare("SELECT  FOUND_ROWS AS total_filas");
	$statement->execute();
	$total_post = $statement->fetch()['total_filas'];

	$total_paginas = ceil($total_post/$fotos_por_pagina);


	print_r($fotos);
	echo $total_paginas;
	require 'view/index.view.php';
?>