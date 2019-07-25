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
		return $this->nombre . ' Tiene ' . $this->edad . ' Años de edad ' . ' De el ' . $this->pais .'<br>';
	}
}

class Estudiante extends Persona{
	function  __construct($nombre,$edad,$pais,$carrera){
		parent:: __construct($nombre,$edad,$pais);
			$this->carrera=$carrera;
	}
}

class Trabajador extends Persona{
	function __construct($nombre,$edad,$pais,$empleo){
		parent:: __construct($nombre,$edad,$pais);
		$this->empleo=$empleo;
	}
}
$carlos = new Trabajador("carlos",30,"salvador","Obrero");
 echo $carlos->mostrarInformacion();
 echo 'Con carrera ' . $carlos->empleo;

?>