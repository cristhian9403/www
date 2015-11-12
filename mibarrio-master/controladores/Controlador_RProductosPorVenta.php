<?php

include_once '../modelos/Modelo_RVenta.php';

class Controlador_RProductosPorVenta{
	private $RVenta;	// Tipo: Modelo_RVenta

	public function __construct($modelo_rventa){
		$this->RVenta = $modelo_rventa;
	}

	public function imprimirFilasPorVenta(){
		$matriz = $this->RVenta->getVentas();
		for ($i=0; $i < $this->RVenta->getTamVentas(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][0]."</td>
				</tr>";
		}
	}

	public function imprimirFilasPorFecha($fe1,$fe2){
		$matriz = $this->RVenta->getBuscarVentas($fe1,$fe2);
		for ($i=0; $i < $this->RVenta->getTamVentas(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][0]."</td>
				</tr>";
		}
	}
	
}

?>
