<?php 
	require 'admin/config.php';
	require 'funciones.php';

	$conexion = conexion($bd_config);

	if(!$conexion){
		header('Location: error.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
		$busqueda = LimpiarDatos($_GET['busqueda']);

		$statement = $conexion->prepare(
		'select * from articulos where titulo like :busqueda or texto like :busqueda'
		);
		// Hay que colocar el formato ala variable para hacer la busqueda con LIKE "%variable%"
		$statement->execute(array(':busqueda' => "%$busqueda%"));
		$resultado = $statement->fetchAll();

		if(empty($resultado)){
			$titulo = "No se encontraron articulos con el resultado " . $busqueda;
		}else{
			$titulo = "Resultados de busqueda " . $busqueda;
		}
	}else{
		header('Location: ' . RUTA . '/index.php');
		
	}

	
	require 'views/buscar.view.php';

?>