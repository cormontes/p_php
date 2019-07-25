<?php

//$_SERVER['REQUEST_METHOD'] metodo para identificar el metodo de envio con la variable global
// forma validar envio de datos

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	echo "Se enviaron por GET";
}else {
	echo "Se enviaron por POST" . "<br>";
}


// Segunda forma de validar envio de datos desde boton
// 

if(isset($_POST['submit'])){
	echo "Se a enviado los datos correctamente";
}
?>