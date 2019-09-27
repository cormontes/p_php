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
			<h1 class="titulo">
				Foto: <?php echo $foto['titulo']; ?>
			</h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="imagenes/" alt="">
			<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium vero atque quis omnis facilis, id debitis modi in asperiores eaque provident dicta, dignissimos praesentium quasi inventore? Cupiditate vero, soluta architecto!</p>
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>regresar</a>
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada de prueba</p>
	</footer>
</body>
</html>