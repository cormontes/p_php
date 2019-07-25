<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina2</title>
</head>
<body>
	<h1>Hola,<?php echo $_SESSION['nombre']; ?></h1>
	<a href="cerrar.php">Cerrar Secion</a>

</body>
</html>