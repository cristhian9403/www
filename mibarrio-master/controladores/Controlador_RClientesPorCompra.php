<?php
require_once('Controlador_reportes.php');
class Controlador_RClientesPorCompra{
	private $cliente = "";
	private $fechaCompra = "";
	private $cantCompras = "";


	public function crear_RClientesPorCompra( $cli, $fecha, $cantc){
		$this->cliente = $cli;
		$this->fechaCompra = $fecha;
		$this->cantCompras = $cantc;
		
		
	}
	
	public function get_cliente(){
		return $this->cliente;
	}
	
	public function get_fechaCompra(){
		return $this->fechaCompra;
	}
	
	public function get_cantCompras(){
		return $this->cantCompras;
	}
	
	
	
	public function set_cliente($cli){
		$this->cliente = $cli;
	}

	public function set_fechaCompra($fecha){
		$this->fechaCompra = $fecha;
	}
	
	public function set_cantCompras($cantc){
		$this->cantCompras = $cantc;
	}
		
}

?>
