<?php
	//Esto es para no mostrar errores
	//error_reporting(0);
	
	//header('Content-type: application/json; charset=utf8');
	

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

	if(validarDatos()){
		$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
		$conexion->set_charset('utf8');

		if($conexion->connection_errno){
			$resultado = [
				error = true
			];
		}
	}