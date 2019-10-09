	<!-- Se manda a llamar el encabezado de la pagina   -->
	<?php require 'header.php'; ?>


	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><a href="#">Titulo del articulo</a></h2>
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

		<?php require 'paginacion.php'; ?>
	</div>
	<?php require 'footer.php'; ?>

