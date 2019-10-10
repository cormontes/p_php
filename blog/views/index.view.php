	<!-- Se manda a llamar el encabezado de la pagina   -->
	<?php require 'header.php'; ?>


	<div class="contenedor">
		<?php foreach($post as $post): ?>
			<div class="post">
			<article>
				<h2 class="titulo"><a href="#"><?php echo $post['titulo']; ?></a></h2>
				<p class="fecha"><?php echo $post['fecha'];?></p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA;?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
					</a>
				</div>
				<p class="extracto"><?php echo $post['extracto']; ?></p>
				<a href="#" class="continuar">Continuar Leyendo</a>
			</article>
		</div>

		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>
	</div>

	<?php require 'footer.php'; ?>
