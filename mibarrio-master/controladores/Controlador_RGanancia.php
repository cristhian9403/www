<?php
require_once('Controlador_reportes.php');
class Controlador_RGanancia{
	private $venta = "";
	private $fechaVenta = "";
	private $valorVenta = "";
	private $gananciaVenta = "";
	private $total = "";

	public function crear_RGanancia( $ven, $fecha, $valv, $ganv, $tot){
		$this->venta = $ven;
		$this->fechaVenta = $fecha;
		$this->valorVenta = $valv;
		$this->gananciaVenta = $ganv;
		$this->total = $tot;
		
	}
	
	public function get_venta(){
		return $this->venta;
	}
	
	public function get_fechaVenta(){
		return $this->fechaVenta;
	}
	
	public function get_valorVenta(){
		return $this->valorVenta;
	}

	public function get_gananciaVenta(){
		return $this->gananciaVenta;
	}
	
	public function get_total(){
		return $this->total;
	}
	
	
	public function set_venta($ven){
		$this->venta = $ven;
	}

	public function set_fechaVenta($fecha){
		$this->fechaVenta = $fecha;
	}
	
	public function set_valorVenta($valv){
		$this->valorVenta = $valv;
	}

	
	public function set_gananciaVenta($ganv){
		$this->gananciaVenta = $ganv;
	}

	public function set_total($tot){
		$this->total = $tot;
	}
		
}

?>