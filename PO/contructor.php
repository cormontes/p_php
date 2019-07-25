<?php 

class Persona{
	public $nombre;
	public $edad;
	public $pais;

	
	function  __construct($nombre,$edad,$pais){
		$this->nombre=$nombre;
		$this->edad=$edad;
		$this->pais=$pais;
	}

	public function mostrarInformacion(){
		echo $this->nombre . ' Tiene ' . $this->edad . ' Años de edad ' . ' De el ' . $this->pais;
	}
}

$carlos = new Persona("carlos",30,"Salvador");
$carlos->mostrarInformacion();
echo '<br>';
$prueba = new Persona("juan",25,"España");
$prueba->mostrarInformacion();



?>