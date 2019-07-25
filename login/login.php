<?php session_start();

	if(isset($_SESSION['usuario'])){
		header('Location: index.php.php');
	}

	$errores = '';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512',$password);

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=login','root','');
		} catch (PDOException $e) {
			echo "Error" . $e->getMessage();
		}

		$statement = $conexion->prepare('select * from usuarios where usuario = :usuario and pass = :password');

		$statement->execute(array(':usuario' => $usuario , ':password' => $password));

		$resultado = $statement->fetch();

		print_r($resultado);

		if($resultado !== false){
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		}else{
			$errores .= '<li>Datos Incorrectos</li>';
		}

	}

	require 'view/login.view.php';
?>