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
			<h1 class="text-center page-header headline-title">Recuperar contrase&ntilde;a</h1><br>
			<form action="Contra_Validar2.php" method="post" class="form-horizontal">
				<fieldset>
					<?php
					//Esto se encarga de revisar si el usuario existe
					//si existe, llama a Contra_Validar2 para que muestre la contraseña

						include_once '../controladores/Controlador_Logueo.php';
						include_once '../modelos/Modelo_Logueo.php';
						
						$controlador = new Controlador_Logueo();
						$validar = new Modelo_Logueo($controlador);

						$documento = $_REQUEST['documento'];

						$pregunta = $validar->pregunta_Usuario($documento);
						echo "<div class='form-group' >
					                <label  class='col-lg-3 control-label'>Documento:</label>
					                <div class='col-lg-8'>
										<input type='text' name='documento' value='".$documento."' required='required' class='form-control' readonly>
									</div>
							</div>";

						if ($pregunta=="")
							header("Location: Contra.php?error=1");
						else{
								echo "<br><label  class='col-lg-8 control-label'>La pregunta es: </label>";
								echo '<input type="text" name="pregu" class="form-control" value="'.$pregunta.'" readonly>';
								echo "<br><label  class='col-lg-8 control-label'>Respuesta: </label>";
								echo '<input type="text" name="respues" class="form-control" placeholder="respuesta">';
						}
						if (isset($_REQUEST['error']))
							echo "<h1>La respuesta es incorrecta</h1><br>";

					?>
					<br>
					<input type="submit" name="aceptar" class="btn btn-primary" value="Aceptar">
				</fieldset>
			</form>

		</div>
	</div>
</div>
</body>
</html>