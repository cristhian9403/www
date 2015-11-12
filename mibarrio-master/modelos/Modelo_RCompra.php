<?php
include_once 'Modelo_Bd.php';

class Modelo_RCompra{
	private $bd;		// Tipo: BD
	private $tam;	// Tipo: int

	public function __construct(){
		$this->bd = new BD("base1","root");
		$this->tamVentas = 0;
	}

	public function getClientesPorCompra(){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "select clientes.Nombres, count(factura.Idcliente) AS num, factura.fechaventa from factura, clientes where factura.Idcliente=clientes.Documento and factura.estado='Registrada' and factura.estado='Registrada' AND fechaventa>='11-11-1111' AND fechaventa<='99-99-9999' group by factura.fechaventa, factura.Idcliente order by factura.fechaventa desc";

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		$this->tam = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['Nombres'];
			$salida[$i][1] = $reg['num'];
			$salida[$i][2] = $reg['fechaventa'];
			$i++;
			$this->tam++;
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getClientesPorCompraPorFecha($fecha1,$fecha2){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "SELECT clientes.Nombres, count(factura.Idcliente) AS num, factura.fechaventa from factura, clientes where factura.Idcliente=clientes.Documento and factura.estado='Registrada' and factura.estado='Registrada' AND fechaventa>='$fecha1' AND fechaventa<='$fecha2' group by factura.fechaventa, factura.Idcliente order by factura.fechaventa desc";

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		$this->tam = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['Nombres'];
			$salida[$i][1] = $reg['num'];
			$salida[$i][2] = $reg['fechaventa'];
			$i++;
			$this->tam++;
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getTam(){
		return $this->tam;
	}
}

?>
