<?php		

	    include '../mpdf/mpdf.php'; // libreria para crear los pdfs

	$html =  $_REQUEST['codigohtml'];// el id de la factura que se va a registrar 

		ob_start();

$mpdf=new mPDF();// funciones para generar el pdf 
$mpdf->WriteHTML($html);
$mpdf->Output("reporte", 'D');

?>
