<?php
include_once 'Modelo_Bd.php';

class Modelo_RGanancias{
	private $bd;		// Tipo: BD
	private $tam;		// Tipo: int

	public function __construct(){
		$this->bd = new BD("base1","root");
		$this->tam = 0;
	}

	public function getGanancias(){
		// Abrir la conexion
		$this->bd->conectar();
		$supersql = "(SELECT factura.Idfactura, montototalconIVA AS Valor_total,(montototalconIVA-SUM(precioCompra*cantidadProducto)-IVAtotalfactura)AS Ganancia , fechaventa AS 
		Fecha FROM factura, listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND factura.estado='Registrada' AND 
		listaproductos.idProducto=productos.id AND fechaventa>='2010 01 01' AND fechaventa<='2016 12 01' GROUP BY factura.idfactura) UNION 
		(SELECT aux.id,SUM(aux.Valor_total),SUM(aux.ganancia) ,aux.Fe FROM(SELECT '' AS id , '' AS fe, montototalconIVA AS Valor_total,
		(montototalconIVA-SUM(precioCompra)-IVAtotalfactura)AS Ganancia FROM factura, listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND 
		factura.estado='Registrada' AND listaproductos.idProducto=productos.id AND fechaventa>='2010 01 01' AND fechaventa<='2016 12 01' GROUP BY factura.idfactura)AS
		aux)";
/*
		"
				(SELECT factura.Idfactura, montototalconIVA AS Valor_total,(montototalconIVA-SUM(precioVenta)-IVAtotalfactura)AS Ganancia , fechaventa AS Fecha FROM factura, 
					listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND factura.estado='Registrada' AND listaproductos.idProducto=productos.id 
					AND fechaventa>='2010 01 01' AND fechaventa<='2015 01 01' GROUP BY factura.idfactura) UNION (SELECT aux.id,SUM(aux.Valor_total),SUM(aux.ganancia) ,aux.Fe 
					FROM(SELECT count(factura.Idfactura) AS id , '' AS fe, montototalconIVA AS Valor_total,(montototalconIVA-SUM(precioVenta)-IVAtotalfactura)AS Ganancia 
					FROM factura, listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND factura.estado='Registrada' AND listaproductos.idProducto=productos.id 
					AND fechaventa>='2010 01 01' AND fechaventa<='2015 01 01' GROUP BY factura.idfactura)AS aux)
		";*/

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($supersql);

		$salida[0][0] = "";
		$i = 0;
		$this->tam = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['Idfactura'];
			$salida[$i][1] = $reg['Valor_total'];
			$salida[$i][2] = $reg['Ganancia'];
			$salida[$i][3] = $reg['Fecha'];
			$i++;
			$this->tam++;
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getGananciasPorFecha($fecha1,$fecha2){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "(SELECT factura.Idfactura, montototalconIVA AS Valor_total,(montototalconIVA-SUM(precioCompra)-IVAtotalfactura)AS Ganancia , fechaventa AS Fecha FROM factura, listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND factura.estado='Registrada' AND listaproductos.idProducto=productos.id AND fechaventa>='$fecha1' AND fechaventa<='$fecha2' GROUP BY factura.idfactura) UNION (SELECT aux.id,SUM(aux.Valor_total),SUM(aux.ganancia) ,aux.Fe FROM(SELECT count(factura.Idfactura) AS id , '' AS fe, montototalconIVA AS Valor_total,(montototalconIVA-SUM(precioCompra)-IVAtotalfactura)AS Ganancia FROM factura, listaproductos, productos WHERE factura.idfactura=listaproductos.idfactura AND factura.estado='Registrada' AND listaproductos.idProducto=productos.id AND fechaventa>='$fecha1' AND fechaventa<='$fecha2' GROUP BY factura.idfactura)AS aux)";

		$resultset = $this->bd->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		$this->tam = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['Idfactura'];
			$salida[$i][1] = $reg['Valor_total'];
			$salida[$i][2] = $reg['Ganancia'];
			$salida[$i][3] = $reg['Fecha'];
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
