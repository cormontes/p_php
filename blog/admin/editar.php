<?php session_start();
	require '../admin/config.php';
	require '../funciones.php';

	ComprobarSession();	

	$conexion = conexion($bd_config);
	if(!$conexion){
		header('Location: ../error.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	}else {
		$id_articulo = id_articulo($_GET['id']);

		if(empty($id_articulo)){
			header('Location: ' . RUTA . '/admin');
		}

		$post = obtener_post_por_id($conexion, $id_articulo);
		if(!$post){
			header('Location: ' . RUTA . '/admin');
		}
		$post = $post[0];
	}

	require '../views/editar.view.php';
?>