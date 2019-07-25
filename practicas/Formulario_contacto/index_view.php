<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario contactos</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
			<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)){ echo $nombre;};?>">

			<input type="text" name="correo" id="correo" class="form-control" placeholder="Correo:" value="<?php if(!$enviado &&  isset($correo)){ echo $correo;};?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>

			<?php if(!empty($error)){ ?>
				<div class="alert error">
				<?php echo $error;?>
				</div>
			<?php }else if($enviado){?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php }?>
			<input type="submit" value="Enviar correo" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>