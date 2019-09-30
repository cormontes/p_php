<?php 
	require 'funciones.php';

	$conexion = conexion('galerias_practica','root','');

	if (!$conexion) {
		die();
	}
	//si id esta setiada conertir id en numero si no colocar la variable en falso
	$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

	//Si id es falso se va ala pagina de inicio
	if(!$id){
		header('Location: index.php');
	}

	// Consulta a base de datos
	$statement = $conexion->prepare("SELECT * FROM fotos WHERE id = :id");
	$statement->execute(array(':id' => $id));

	$foto = $statement->fetch();

	if(!$foto){
		header('Location: index.php');
	}
	
	require 'view/fotos.view.php';
?>
