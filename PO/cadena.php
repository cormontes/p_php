<?php 
class usuario{
	public $nombre;
	public $correo;

	// Metodo Constructor
	
	function __construct($nombre,$correo){
		$this->nombre=$nombre;
		$this->correo=$correo;
	}

	public function mostrarNombre(){
		echo "su nombre es ". $this->nombre ."<br>";
		return $this;
	}

	public function mostrarCorreo(){
		echo "su correo es ".$this->correo ."<br>";
		return $this;
	}
}

$carlos = new usuario("carlos","soporte@gmail.com");
$carlos->mostrarNombre()->mostrarCorreo();

?>