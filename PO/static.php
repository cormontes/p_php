<?php
class persona{
	public static $dia = "7 de septiembre";

	public static  function saludo($nombre = null){
		if($nombre){
			return 'Hola, buen dia' . $nombre;
		}else{
			return 'Hola, buen dia';
		}
		
	}
}

$carlos = new persona;
$carlos->saludo();
//con el static se manda a llamar una variable sin tener que instanciar la clase
//echo persona::$dia;
echo persona::saludo("carlos");

?>
