<?php session_start();
	require 'admin/config.php';
	require 'funciones.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = Limpiardatos($_POST['usuario']);
		$password = Limpiardatos($_POST['password']);

		if($usuario == $blog_config['usuario'] && $password == $blog_config['password']){
			$_SESSION['admin'] == $blog_config['usuario'];
			header('Location: ' . ruta . '/admin');
		}
	}

	require 'views/login.view.php';
?>