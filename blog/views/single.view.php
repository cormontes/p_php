<!-- Se manda a llamar el encabezado de la pagina   -->
	<?php require 'header.php'; ?>


	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
				<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
				<div class="thumb">
						<img src="<?php echo RUTA;?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
				</div>
				<!-- nl2br para obtener espaciados en el parrafo -->
				<p class="extracto"><?php echo nl2br($post['extracto']); ?></p>
			</article>
		</div>
	</div>
	<?php require 'footer.php'; ?>
