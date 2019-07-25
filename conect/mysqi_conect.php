<?php 
// la forma antigua de conexion a MySql
$conexion = mysql_connect('localhost','root',' ') or die('no se pudo conectar ala base de datos');

//$conexion = mysql_connect('locahost','root','') or die('No se pudo conectar ala base de datos');

mysql_select_db('usuario', $conexion);

$resultado = mysql_query('select * from usuarios');

while($fila = mysqli_fetch_object($resultado)){
	echo $fila->nombre;
	echo '<br>';
}
?>