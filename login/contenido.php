<?php session_start();

if (isset($_SESSION['usuario'])){
	require 'view/contenido_view.php';
}else{
	header('Location: login.php');
}


?>