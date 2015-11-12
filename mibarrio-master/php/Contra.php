<!DOCTYPE html>
<html>
<head>
<title>Recuperar Contrase&ntilde;a</title>
<link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap.min2.css" media="screen" type="text/css" />
<script src="../js/jquery.js"></script>
</head>
<body>



<div class="container">
	<div class="row"><br><br><br><br></div>
	<div class='col-lg-3' ></div>
	<div class='col-lg-5 well modal-content' >
		<h1 class="text-center page-header headline-title">Recuperar contrase&ntilde;a</h1><br>
		<form action="Contra_Validar.php" method="post" class="form-horizontal">
			<fieldset>
	            <div class='form-group' >
	                <label  class='col-lg-3 control-label'>Documento:</label>
	                <div class='col-lg-8'>
						<input type="text" name="documento" placeholder="Numero de documento" required="required" class="form-control">
					</div>
				</div>
				<div class='form-group' >
					<?php
						{
							if (isset($_REQUEST['error']))
								echo "<label  class='col-lg-3 ' control-label'>Datos inv&aacute;lidos</label> <br>";
						}
					?>
					<div class='col-lg-3' ></div>
					<input type="submit" name="login" class="btn btn-primary" value="Solicitar">
					&nbsp;&nbsp;<a href = "../index.php" class="btn btn-primary">Regresar </a>
				</div>
	        </fieldset>
		</form>
	</div>
</div>
			
			

</body>
</html>