<?php
	//Archivo JSON
	//echo '[{"nombre" : "carlos"},{"nombre" : "Miguel"}]';
	
	//Header para darle formato alos archivos JSON
	header('Content-type: application/json; charset = utf-8');

	$resultado = [
		[
			'id' => '5db364a945250af53456ed93',
			'nombre' => 'carlos',
			'edad' => 30,
			'pais' => 'El Salvador',
			'correo' => 'correo@correo.com'
		],
		[
			'id' => '5db364a9ac7218378895a673',
			'nombre' => 'Juan',
			'edad' => 30,
			'pais' => 'El Salvador',
			'correo' => 'correo@correo.com'
		]
	];
	// Transforma el objeto a JSON
	 echo json_encode($resultado);
	
?>