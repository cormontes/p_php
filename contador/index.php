<?php 

function contar_usuario(){
	$archivo = 'archivo.txt';

	if(file_exists($archivo)){
		// lee contenido y le suma 1
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo,$cuenta);

		return $cuenta;
	}else{
		// Si el archivo.txt no existe lo crea y lo inicia a 1
		file_put_contents($archivo,1);

		return 1;
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contador de Visitas</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numeros"><?php echo contar_usuario() ?></p>
		<p class="texto">Visitas</p>
	</div>
</body>
</html>