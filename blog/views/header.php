<!-- html:5 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- meta:vp -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Blog</title>
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
				<p><a href="index.php">Mi primer Blog</a></p>
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