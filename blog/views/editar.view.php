<?php require 'header.php';?>
<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Editar Articulos</h2>
			<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" name="id" value="">
				<input type="text" name="titulo" value="<?php echo $post['titulo'];?>">
				<input type="text" name="extracto" value="<?php echo $post['extracto'];?>">
				<textarea name="texto" placeholder="Texto del Articulo"></textarea>
				<input type="file" name="thumb">
				<input type="hidden" name="thumb-guardada" value="">

				<input type="submit" value="Modificar Articulo">
			</form>
		</article>
	</div>
</div>


<?php require 'footer.php';?>