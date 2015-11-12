<?php
	//incluye el menu y demas cosas contenidas en perfil.php
	include ("perfil.php"); 
	//inicio de la div de contenido, cajon central
echo"<div class='row '>";
//segun sea el caso en el header indica la acciona realizar
$recibe_pagina=$_REQUEST['gestion'];

switch ($recibe_pagina){ 
	default:	   
		//switch ($recibe_pagina){ 
			// en el caso de que gestion=crearPerfil
		 	
				//en caso no haber tenido permiso y haber ingresado a la url, imprime el error


			// en caso de que gestion=exito, devuelto por el controlador, imprime exito
		
			// aqui van los errores devueltos a la hora de crear el perfil
		if ($recibe_pagina == "error"){
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "<h1><i>No se ha creado el perfil.</i></h1>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		}
		
		elseif ($recibe_pagina ==  "error4"){
			

		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-danger alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>¡No se ha creado el perfil!,</strong> El nombre del perfil debe tener minimo 2 Caracteres.
				</div>";
				
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		}
		elseif ($recibe_pagina ==  "error5"){
			

		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-danger alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>¡No se ha creado el perfil!,</strong> No deben haber perfiles sin al menos un permiso.
				</div>";		
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		}
		

		include ("_form_crear_perfil.php");

		break;


case "exito":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-success alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  Se ha creado el perfil.
				  <a href='Ver_Perfil.php?gestion=visualizar' class='alert-link'>Ver</a>
				</div>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;

case "exito2":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-warning alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				 Se ha borrado el perfil.
				 <a href='Ver_Perfil.php?gestion=visualizar' class='alert-link'>Volver</a>
				</div>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;

case  "exito3":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-success alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				 Se ha modificado el perfil.
				 <a href='Ver_Perfil.php?gestion=visualizar' class='alert-link'>Volver</a>
				</div>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;

case  "error6":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-danger alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>¡No se ha modificado el perfil!,</strong> El nombre del perfil debe tener minimo 2 Caracteres.
				  <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a>
				</div>";

		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;
case  "error7":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "
				<div class='alert alert-danger alert-dismissable'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <strong>¡No se ha modificado el perfil!,</strong> No deben haber perfiles sin almenos un permiso.
				  <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a>
				</div>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;

case "error2":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "<h1><i>No se ha borrado el perfil.</i></h1> ";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break; 
			// en caso de haber modificado el perfil y tener exito
		
			// errores a la hora de crear el perfil devuelven esto
case  "error3":
		 	if($c_perfil->get_PermisoPerfiles()){
				echo "<h1><i>No se ha modificado el perfil.</i></h1>";
		 	}else
				echo "<h1><i>Esto no te pertenece.</i></h1>";
		break;  

}


?>
</div>


                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/npm.js"></script>
    </body>
</html>
