<?php

class Controlador_RGanancias{
	private $RGanancia;	// Tipo: Modelo_RGanancia

	public function __construct($modelo_rganancia){
		$this->RGanancia = $modelo_rganancia;
	}

	public function imprimirFilasGanancias(){
		$matriz = $this->RGanancia->getGanancias();
		for ($i=0; $i < $this->RGanancia->getTam(); $i++) { 
			echo "<tr>";
					if($i+1 == $this->RGanancia->getTam())
						echo "<th>Total</th>";
					else echo "<td>".$matriz[$i][0]."</td>";

			echo "
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
					<td>".$matriz[$i][3]."</td>
				</tr>";
		}
	}

	public function imprimirFilasGananciasPorFecha($fe1,$fe2){
		$matriz = $this->RGanancia->getGananciasPorFecha($fe1,$fe2);
		for ($i=0; $i < $this->RGanancia->getTam(); $i++) { 
			echo "<tr>";
					if($i+1 == $this->RGanancia->getTam())
						echo "<th>Total</th>";
					else echo "<td>".$matriz[$i][0]."</td>";

			echo "
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
					<td>".$matriz[$i][3]."</td>
				</tr>";
		}
	}
}

?>
