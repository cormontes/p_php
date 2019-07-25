<?php
session_start();
$_SESSION['nombre'] = 'carlos'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessions</title>
</head>
<body>
	<h1>Pagina de Inicio</h1>
	<p></p>
	<a href="pagina2.php">Ir a pagina 2</a>
</body>
</html>