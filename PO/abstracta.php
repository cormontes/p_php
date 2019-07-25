<?php 

// una clase abstracta sirve para proteger la clase y solo puede devolver el contenido heredando a una clase
abstract  class persona{
	public function saludo(){
		return "Hola";
	}
}

class estudiante extends persona{

}
$carlos = new estudiante;
echo $carlos->saludo();
?>