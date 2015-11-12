<?php
abstract class Controlador_reportes 
{
	private $fecha = "";

	public function crear_reportes ($fecha){
		$this->fecha = $fecha;
	}

	public function get_fecha();
	
	public function set_fecha($fecha);
}
?>