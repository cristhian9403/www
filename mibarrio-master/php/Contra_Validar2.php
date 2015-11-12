<html>
<head>
<title>Mi Barrio</title>
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.min2.css" media="screen" type="text/css" />
<script src="../js/jquery.js"></script>
</head>
<body>

<div class="container">
	<div class="row"><br><br><br><br></div>
		<div class="row">
			<div class='col-lg-3' ></div>
			<div class='col-lg-5 well modal-content' >
				

	<?php

		include '../modelos/Modelo_Logueo.php';
		
		$validar = new Modelo_Logueo();

		$documento = $_REQUEST['documento'];
		$pregunta = $_REQUEST['pregu'];
		$respuesta = $_REQUEST['respues'];
		$contra = $validar->restaurar_Contra($documento,$pregunta,$respuesta);
		if ($contra=="") 
			header("Location: Contra_Validar.php?error=1");
		elseif($contra=="NOt"){
			echo "<h1 class='text-center page-header headline-title'>La respuesta es incorrecta</h1><br>";
		}
		else{
			echo "<div class='login-help'>
			<br><h1 class='text-center page-header headline-title'>Su contrase&ntilde;a es:</h1><br>
			<p>$contra</div><br>";
		}


	?>
	<div class="login-help">
	<p><a href="../index.php" class='btn btn-primary'><b>Regresar</b></a>
	</div>

</div>
</div>
</div>

</body>
</html>