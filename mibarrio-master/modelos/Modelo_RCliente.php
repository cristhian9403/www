<?php
include_once 'Modelo_Bd.php';

class Modelo_RCliente{
		private $bd;		// Tipo: BD
		private $RCliente;	// Tipo: Controlador_Usuario

			public function __construct($control_RCliente){
		$this->bd = new BD("base1","root");
		$this->bd->conectar();
		$this->RCliente = $control_RCliente;
	}

	public function getclienteporcompra(){
		// Abrir la conexion
		$this->con->concetar();
		$sql = "select clientes.Nombres, count(factura.idcliente), factura.fechaventa from factura, clientes where factura.idcliente=clientes.Documento group by factura.idcliente order by count(factura.idcliente) desc;";

		// Recibe el resultset de la consulta
		$resultset = $this->con->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		while($reg=pg_fetch_array($resultset)){
			$salida[$i][0] = $reg['clientes.Nombres'];
			$salida[$i][1] = $reg['count(factura.idcliente)'];
			$salida[$i][2] = $reg['factura.fechaventa'];
			$i++;
		}

// Cerrar la conexion
		$this->con->desconectar();

		return $salida;
	}

}