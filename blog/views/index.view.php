<!-- html:5 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- meta:vp -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
</head>
<body>
	<!---  Parte del Encabezado  -->
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="#">Mi primer Blog</a></p>
			</div>

			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA;?>/buscar.php" method="get">
				<input type="text" name="busqueda" placeholder="Buscar">
				<button type="submit" class="icono fa fa-search"></button>
				</form>

				<nav class="menu">
				<ul>
					<!-- li*2>a  inserta los li y dos a-->
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
				</ul>
			</nav>
			</div>
		</div>
	</header>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Titulo del articulo</h2>
				<p class="fecha">1 de enero del 2019</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA;?>/imagenes/1.png" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias perspiciatis vitae quidem quia vel totam cupiditate possimus ullam doloribus illum voluptate tempora soluta excepturi impedit, hic eos iste aperiam nam!</p>
				<a href="#" class="continuar">Continuar Leyendo</a>
			</article>
		</div>

		<div class="post">
			<article>
				<h2 class="titulo">Titulo del articulo</h2>
				<p class="fecha">1 de enero del 2019</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA;?>/imagenes/1.png" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias perspiciatis vitae quidem quia vel totam cupiditate possimus ullam doloribus illum voluptate tempora soluta excepturi impedit, hic eos iste aperiam nam!</p>
				<a href="#" class="continuar">Continuar Leyendo</a>
			</article>
		</div>
	</div>

</body>
</html>