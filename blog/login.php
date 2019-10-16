<?php session_start();
	require 'admin/config.php';
	require 'funciones.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = LimpiarDatos($_POST['usuario']);
		$password = LimpiarDatos($_POST['password']);

		if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
			$_SESSION['admin'] = $blog_admin['usuario'];
			header('Location: ' . RUTA . '/admin');
		}
	}

	require 'views/login.view.php';
?>