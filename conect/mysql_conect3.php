<?php 

//$id = $_GET['id'];
try{
	$conexion = new PDO('mysql:host=localhost;dbname=usuario','root','');


	//$statement = $conexion->prepare('insert into usuarios values (null,"pedro","prueba@gmail.com")');
	//$statement->execute();

	$statement = $conexion->prepare('select * from usuarios');
	$statement->execute();
	//solo el primer registro
	//$resultado = $statement->fetch();
	$resultado = $statement->fetchAll();
	foreach ($resultado as $usuario) {
	echo $usuario['id'] . "-" . $usuario['nombre'] . "<br>";
	}

}catch (PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>