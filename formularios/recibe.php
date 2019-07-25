<?php
//print_r($_POST);


// si no resibe ningun post se redirecciona ala pantalla principal
if (!$_POST){
	header('Location: http://localhost/php/formularios');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'mi nombre es: '. $nombre . ' $sexo ';

?>
