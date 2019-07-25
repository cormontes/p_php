<?php

try{

	//Primera forma de conexion a bases de datos
	$Conexion = new PDO('mysql:host=localhost;dbname=usuario','root','');
	//echo 'Conexion Establecida';
	
	//Insertar un registro
	//$resultado = $Conexion->query('insert into usuarios(id,nombre,correo) values (null,"pedro","soporte@gmail.com")');
	//
	$resultado = $Conexion->query("select * from usuarios where id= 2");

	foreach ($resultado as $fila) {
		echo $fila['id'] . '-' .$fila['nombre'] . '<br>';
	}

}catch (PDOException $e){
	echo "Error: " . $e->getMessage();
}

 ?>
