<?php 

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root','');
	}catch (PDOException $e){
		echo "ERROR" . $e->getMessage();
		die();
	}

	// Si pagina esta setia obtendra el numero entero de la pagina si no sera 1
	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	$postPorPagina = 5;

	$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

	// SQL_CALC_FOUNDS_ROWS cuenta la cantidad de registros
	// se le coloca LIMIT ala consulta
	// 
	/*$articulos = $conexion->prepare("
		SELECT SQL_CALC_FOUND_ROWS *  FROM articulos
		LIMIT $inicio,$postPorPagina");*/
	
	$articulos = $conexion->prepare("
		SELECT  *  FROM articulos
		LIMIT $inicio,$postPorPagina");

	// Ejecutar la consulta
	$articulos->execute();
	// Mostrar todos los registros de la consulta
	$articulos = $articulos->fetchAll();

	if(!$articulos){
		header('location:index.php');
	}

	$totalArticulos = $conexion->query("select count(*) as total from articulos");
	//$totalArticulos = $conexion->query("SELECT FOUND_ROWS() AS total");
	$totalArticulos = $totalArticulos->fetch()['total'];

	// ceil Redondea al entero arriba mas proximo
	$numeroPaginas = ceil($totalArticulos / $postPorPagina);


	require 'index_view.php';
?>