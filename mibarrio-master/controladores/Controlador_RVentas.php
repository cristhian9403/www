<?php

include_once '../modelos/Modelo_RVenta.php';

class Controlador_RVentas{
	private $RVenta;	// Tipo: Modelo_RVenta

	public function __construct($modelo_rventa){
		$this->RVenta = $modelo_rventa;
	}
	
	public function imprimirFilasProductoPorVenta(){
		$matriz = $this->RVenta->getProductoPorVenta();
		for ($i=0; $i < $this->RVenta->getTamProductoPorVenta(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][0]."</td>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
					<td>".$matriz[$i][3]."</td>
				</tr>";
		}
	}
	
	public function imprimirFilasProductoPorVentaPorFecha($fe1,$fe2){
		$matriz = $this->RVenta->getProductoPorVentaPorFecha($fe1,$fe2);
		for ($i=0; $i < $this->RVenta->getTamVentas(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][0]."</td>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
					<td>".$matriz[$i][3]."</td>
				</tr>";
		}
	}
}

?>
