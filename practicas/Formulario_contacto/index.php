<?php 
	$error='';
	$enviado='';
	
	if(isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		// valida si el campo nombre no esta vacio
		
		if(!empty($nombre)){
			$nombre = trim($nombre);
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
		}else{
			$error .= 'Por Favor ingrese un nombre <br>';
		}

		// valida si el campo correo no esta vacio
		if(!empty($correo)){
			$correo = filter_var($correo,FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				$error .= 'Porfavor Ingresa un correo valido <br>';
			}
		}else{
			$error .='Por favor Ingresa un correo <br>';
		}

		// valida si el campo mensaje no esta vacio
		
		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripcslashes($mensaje);
		}else{
			$error .='Por Favor ingrese un mensaje <br>';
		}


		// Correo enviado
		if(!$error){
			$enviar_a='soporte@mikemike.com.sv';
			$asunto='Correo enviado desde pagina';
			$mensaje_preparado="De: $nombre \n";
			$mensaje_preparado.="Correo: $correo \n";
			$mensaje_preparado.="Mensaje:". $mensaje;

			mail($enviar_a,$asunto,$mensaje_preparado);
			$enviado=true;
		}
	}
	require 'index_view.php';
?>