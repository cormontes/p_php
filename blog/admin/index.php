<?php session_start();

	// Archivo Index para el ADMIN
	require 'config.php';
	require '../funciones.php';

	$conexion = conexion($bd_config);

	// Comprobar Session
	ComprobarSession();

	if(!$conexion){
		header('Location: ../error.php');
	}

	$post = obtener_post($blog_config['post_por_pagina'], $conexion);

	if(!$post){
		header('Location: ../error.php');
	}

	require '../admin.index.view.php';
?>