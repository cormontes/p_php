<?php
	//Esto es para no mostrar errores
	//error_reporting(0);
	
	//header('Content-type: application/json; charset=utf-8');
	

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$pais = $_POST['pais'];
	$correo = $_POST['correo'];

	//Funcion para validar datos
	function validarDatos($nombre, $edad, $pais, $correo){
		if($nombre == ''){
			return false;
		}else if($edad == '' || is_int($edad)){
			return false;
		}else if($pais == ''){
			return false;
		}else if($correo == ''){
			return false;
		}

		return true;
	}

	if(validarDatos($nombre, $edad, $pais, $correo)){
		$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
		$conexion->set_charset('utf8');

		if($conexion->connection_errno){
			$respuesta = [
				'error' => true
			];
		}else{

			$statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?,?,?,?)");

			// nombre string (s), edad intenger (i), pais string (s), correo string (s) 
			$statement->bind_param(siss, $nombre, $edad, $pais, $correo);
			$statement->execute();

			if($conexion->affected_rows <= 0){
				$respuesta = [
					'error' => true,
					'mensaje' => 'No se agregaron filas'
				];
			}
		}
	}else{
		$respuesta = [
			'error' => true
		];
	}

	echo json_encode($respuesta);