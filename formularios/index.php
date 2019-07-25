<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<form action="recibe.php" method="post">
		<input type="text" name="nombre" placeholder="Ej: Nombre">
		<br>
		<label for="hombre">hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<br>
		<label for="mujer">mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>
		<label for="terminos">Aceptar terminos</label>
		<input type="checkbox" name="terminos" value="ok">
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>