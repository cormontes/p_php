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
			<h1 class="titulo">Mi Galeria</h1>
		</div>
	</header>

	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $fotos): ?>
				<div class="thumb">
					<a href="fotos.php?id=<?php echo $fotos['id']; ?>">
						<img src="fotos/<?php echo $fotos['foto']; ?>" alt="">
					</a>
				</div>
			<?php endforeach ?>

			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual - 1 ;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i>Pagina Anterior</a>
				<?php endif ?>
				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente<i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>
				
				
			</div>
		</div>
	</section>

	<footer>
		<p class="copyright">Galeria creada de prueba</p>
	</footer>
</body>
</html>