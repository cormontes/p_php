<?php
	include 'funciones.php';
	$conexion = conexion('galerias_practica','root','');

	if(!$conexion){
		die();
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_FILES)){
		$scheck = @getimagesize($_FILES['foto']['tmp_name']);

		if($scheck !== false){
			$carpeta_destino = "fotos/";
			$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
			echo $archivo_subido;
		}
	}

	require 'view/subir.view.php';
 ?>
