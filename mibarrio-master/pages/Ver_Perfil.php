<?php
$recibe_pagina=$_REQUEST['gestion'];

include ("perfil.php"); 

echo"<div class='row well '>";

switch ($recibe_pagina){ 


case "visualizar":
  		
		//include_once '../controladores-php/selecionar.php';

		// en el caso de que gestion= visualizar muestra los nombres de todos los perfiles almacenados, en un "select"
		// o combobox

		// m_perfil ya ha sido creado en perfil.php, se llama al metodo que muestra todos los perfiles 	
		$data=$m_perfil->mostrar_Todos();
		
			
		//inicio del form con una tabla pequeña que contendra el combo y el submit para enviar el nombre a esta misma pagina 
		// con otro header en gestion
		echo"<form action='Ver_Perfil.php?gestion=visualizar-seleccion' method='post' class='form-horizontal'>
				<fieldset>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Selecciona un perfil:</label>
                        <div class='col-lg-3'>
							<select name='Nombre_perfil' class=' form-control'>";       
							for($i=0; $i<count($data); $i++)
							{
								echo "<option value='"; 
								echo "".$data[$i][0]."'>";
								echo "".$data[$i][0]."</option>";	
							}
						
						echo"</select>
						</div>
					</div>
					<div class='form-group' >
						<div class='col-lg-9 col-lg-offset-3'>  
							<input type='submit' name='visualizar' class='btn btn-primary' value='Visualizar'>
						</div>
					</div>";
					echo"
				</fieldset>
			</form>";

break; 
case "visualizar-seleccion":
		// despues de haber seleccionado el perfil se recarga la pagina con gestion=visualizar-seleccion

		// instnacias de las clases necesarias para visualizar el perfil seleccionado, realiza la busqueda 
		// en base al nombre.
		$consulta_perfil = new Controlador_Perfil();
		$mConsulta_perfil = new Modelo_Perfil($consulta_perfil);
		$mConsulta_perfil->buscar_Perfil($_REQUEST['Nombre_perfil']);
		$mConsulta_perfil->desconectarBD();

		$namePE = $consulta_perfil->get_Nombre();

		// imprime una tabla con la informacion del perfil (permisos "booleanos", y nombre "string")
		// en caso de que un permiso sea true, imprime "si", caso contrario "no".

		echo " 
		<div class='row'>
        <div class='col-lg-2'></div>
      <div class='col-lg-8'>
        <div class='panel panel-primary'>
            <div class='panel-heading'>
                <h2 class='panel-title text-center'>Modificar Perfil</h2>
            </div>
            <div class=' panel-body'>

            	<div class='CSSTableGenerator'><table class='table table-striped table-hover'>
					<tr>
					  <td ><strong>Perfil: ".$namePE."</strong></td></tr></table></div>";


		echo "<table class='table table-striped table-hover'>
					<tr>
					   <td colspan='3'><strong>Permiso</strong></td>
					  
					 
					</tr>
					 
					<tr>
					  <td>Sistema</td>";

					  if($consulta_perfil->get_PermisoSistema()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";		

					echo"
					</tr>
					 
					<tr>
					  <td>Perfiles</td>";

					  if($consulta_perfil->get_PermisoPerfiles()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";

					echo"
					</tr>
					 
					<tr>
					  <td>Productos</td>";
					  if($consulta_perfil->get_PermisoProductos()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";
	
					  
					echo"  
					</tr>

					<tr>
					  <td>Inventario</td>";
					  if($consulta_perfil->get_PermisoInventario()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";

					 echo" 
					</tr>

					<tr>
					  <td>Facturacion</td>";
					  if($consulta_perfil->get_PermisoFacturacion()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";

					 echo"
					</tr>

					<tr>
					  <td>Clientes</td>";
					  if($consulta_perfil->get_PermisoCliente()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";

					 echo"
					</tr>

					<tr>
					  <td>Venta</td>";
					  if($consulta_perfil->get_PermisoVenta()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";

					 echo"
					</tr>

					<tr>
					  <td>Reportes</td>";
					  if($consulta_perfil->get_PermisoReportes()){
							echo "<td><strong>Si</strong></td>";	
						}
						else echo "<td><strong>No</strong></td>";
						
					 echo"
					</tr>

					<tr>					  
					  <td colspan='2'></td>
					</tr>

					<tr>
					  <td >

					  	 <a href='Modificar_Perfil.php?id=".$namePE."'class='btn btn-primary'>
						 Modificar perfil</a>
					  
					  </td>

					  <td >
					  	<a href='Eliminar_Perfil.php?id=".$namePE."'class='btn btn-primary'>
						Eliminar perfil</a>

					  </td>
					</tr>

			</table>
			</div>
          </div>
        </div>
    </div>";
break;		
default:
// en caso no presentarse ninguna de las opciones anteriores imprime esto
echo "<h1><b>Bienvenido, ".$c_usuario->get_Nombres().".</b></h1>";
}

?>

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