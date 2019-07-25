<?php

class Persona{
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInformacion(){
	echo 'Hola Mundo';
	}
}



$carlos = new Persona;
$carlos->nombre='Carlos O';
$carlos->edad=23;
$carlos->pais='Mexico';

//$carlos->mostrarInformacion();

echo $carlos->nombre . 'Tiene : '.$carlos->edad . ' Años de;
?>