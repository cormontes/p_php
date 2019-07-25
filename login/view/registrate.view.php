<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial=scale=1.0, ,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Registrate</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login" >

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" class="usuario" name="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" class="password" name="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" class="password_btn" name="password2" placeholder="Repetir Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<?php if(!empty($errores)):?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif;?>
		</form>

		<p class="texto-registrate">
			¿ Ya tienes cuenta ?
			<a href="login.php">Iniciar Sesion</a>
		</p>
	</div>

</body>
</html>
