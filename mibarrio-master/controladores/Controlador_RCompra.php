<?php

include_once '../modelos/Modelo_RCompra.php';

class Controlador_RCompra{
	private $RVenta;	// Tipo: Modelo_RVenta

	public function __construct($modelo_rventa){
		$this->RVenta = $modelo_rventa;
	}

	public function imprimirFilasClientesPorCompra(){
		$matriz = $this->RVenta->getClientesPorCompra();
		for ($i=0; $i < $this->RVenta->getTam(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][0]."</td>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
				</tr>";
		}
	}

	public function imprimirFilasClientesPorCompraPorFecha($fe1,$fe2){
		$matriz = $this->RVenta->getClientesPorCompraPorFecha($fe1,$fe2);
		for ($i=0; $i < $this->RVenta->getTam(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][0]."</td>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
				</tr>";
		}
	}
	
}

?>
