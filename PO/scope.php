<?php


// public 
// protected
// private


class usuario{
	public $nombre;
	protected $correo;

	function __construct($nombre,$correo){
		$this->nombre=$nombre;
		$this->corre=$correo;
	}

	public function mostrarInf(){
		return $this->correo;
	}
}

class miembro extends usuario{
	public function mostracorreo(){
		return 'este es el correo '.$this->correo;
	}
}

$carlos = new miembro("carlos","soporte@mikemike.com.sv");
echo $carlos->mostracorreo();
?>
