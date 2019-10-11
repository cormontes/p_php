<?php 
	require 'admin/config.php';
	require 'funciones.php';

	$conexion = conexion($bd_config);

	if (!$conexion){
		header('Location: error.php');
	}

	$post = obtener_post($blog_config['post_por_pagina'], $conexion);

	if(!$post){
		header('Location: error.php');
	}
	

	
	require 'views/index.view.php';
?>