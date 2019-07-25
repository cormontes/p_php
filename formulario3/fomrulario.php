<?php

	$error = '';

	if (isset($_POST['submit'])){
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];

		// si nombre no esta vacio
		if(!empty($nombre)){
			// quitara espacios en blanco
			//$nombre = trim($nombre);
			// transforma los caracteres especiales para no inyectar codigo
			//$nombre = htmlspecialchars($nombre);
			// quita las "/"  pleca 
			//$nombre = stripcslashes($nombre);

			// Quita y limpia caracteres especiales de la cadena de caracteras 
			$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

			echo "Tu nombre es: $nombre <br>";
			

		}else{
			$error .= 'Por favor agregar un nombre <br>';
		}

		if (!empty($correo)){
			$correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
			if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
				$error .= "Por favor ingrese un correo valido <br>";
			}
			else{
				echo "Tu correo es ". $correo . "<br>";
			}

		}else{
			$error .= 'Por favor agregar un correo';
		}
	}
?>

<!---  Codigo HTML       -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario3</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="nombre" id="nombre" placeholder="nombre">
		<br>
		<input type="text" name="correo" id="correo" placeholder="Correo">
		<br>

		<?php if(!empty($error)){ ?>
			<div class="error"><?php echo $error; ?></div>
		<?php }; ?>

		<input type="submit" value="Enviar" name="submit">
	</form>
</body>
</html>