<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paginacion</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

	<div class="contenedor">
		<h1>Articulos</h1>
		
		<!-- Listado  -->
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . ' - ' . $articulo['articulos'] ?></li>
				<?php endforeach ?>
			</ul>
		</section>

		<!-- Paginacion  -->
		<section class="paginacion">

			<!-- Boton Retroceso -->
			<ul>
				<?php if ($pagina <= 1): ?>
					<li class="disable"><a href="">&laquo;</a></li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1?>">&laquo;</a></li>
				<?php endif ?>
				

				<?php 
					for($i=1; $i<=$numeroPaginas; $i++){
						if($pagina == $i){
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						}else{
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				?>

				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disable"><a href="">&raquo;</a></li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1?>">&raquo;</a></li>
				<?php endif ?>
				
			</ul>
		</section>
	</div>

</body>
</html>