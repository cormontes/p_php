<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galeria</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>

	<div class="contenedor">
		<form  class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		
		<label for="foto">Subir Fotos</label>
		<input type="file" id="foto" name="foto">

		<label for="titulo">Titulo de Foto</label>
		<input type="text" id="titulo" name="titulo">
		</form>

		<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>regresar</a>
	</div>

	<footer>
		<p class="copyright">Galeria creada de prueba</p>
	</footer>
</body>
</html>