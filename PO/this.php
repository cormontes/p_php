<?php 

class Persona{
	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInformacion(){
		echo $this->nombre . ' Tiene ' . $this->edad . ' Años de edad ' . ' De el ' . $this->pais;
	}
}

$carlos = new Persona;
$carlos->nombre='Carlos O';
$carlos->edad=30;
$carlos->pais='El Salvador';
$carlos->mostrarInformacion();

echo "<br>";

$alejandro = new Persona;
$alejandro->nombre='Alejandro';
$alejandro->edad=40;
$alejandro->pais='España';
$alejandro->mostrarInformacion();

?>