
<?php 
//todo lo de crear perfil
 	//verifica los permisos de quien se logueo
	
 	if($c_perfil->get_PermisoPerfiles()){
 		//imprime el form y indica a donde mandara los campos
?>
 		    <div class="row">
        <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class='panel-heading'>
                <h2 class='panel-title text-center'>Crear Perfil</h2>
            </div>
            <div class=' panel-body'>
              <form action='../script/Crear_Perfil.php' method='post' class="form-horizontal">
                <fieldset>
                    <div class='form-group' >
                        <label  class='col-lg-6 control-label'>Datos del nuevo perfil:</label>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Nombre del perfil:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='nomb_Perfil' class='form-control' placeholder='Escriba el nombre del perfil' required='required' maxlength=50 />
							<span class="help-block">Ayuda: el nombre del perfil debe contener dos letras minimo y el perfil debe tener por lo menos un permiso.</span>
                        </div>
                    </div>
                    <div class="">
                    	<table border=1 class='table table-striped table-hover'>
						<tr>
						  <td><strong>Permiso</strong></td>
						  <td><strong>S&iacute;</strong></td>
						  <td><strong>No</strong></td>
						</tr>
						 
						<tr>
						  <td>Sistema</td>
						  <td><input type='radio' name='sis' value='1' /></td>
						  <td><input type='radio' name='sis' value='0' checked='checked' /></td>
						</tr>
						 
						<tr>
						  <td>Perfiles</td>
						  <td><input type='radio' name='perf' value='1' /></td>
						  <td><input type='radio' name='perf' value='0' checked='checked' /></td>
						</tr>
						 
						<tr>
						  <td>Productos</td>
						  <td><input type='radio' name='prod' value='1' /></td>
						  <td><input type='radio' name='prod' value='0' checked='checked' /></td>
						</tr>

						<tr>
						  <td>Inventario</td>
						  <td><input type='radio' name='inv' value='1' /></td>
						  <td><input type='radio' name='inv' value='0' checked='checked' /></td>
						</tr>

						<tr>
						  <td>Facturacion</td>
						  <td><input type='radio' name='fac' value='1' /></td>
						  <td><input type='radio' name='fac' value='0' checked='checked' /></td>
						</tr>

						<tr>
						  <td>Clientes</td>
						  <td><input type='radio' name='cli' value='1' /></td>
						  <td><input type='radio' name='cli' value='0' checked='checked' /></td>
						</tr>

						<tr>
						  <td>Venta</td>
						  <td><input type='radio' name='ven' value='1' /></td>
						  <td><input type='radio' name='ven' value='0' checked='checked' /></td>
						</tr>

						<tr>
						  <td>Reportes</td>
						  <td><input type='radio' name='rep' value='1' /></td>
						  <td><input type='radio' name='rep' value='0' checked='checked' /></td>
						  </table>	
                    </div>
                    <div class='form-group' >
                        <div class='col-lg-9 col-lg-offset-3'>        
                            <input type='submit' name='crear' class='btn btn-primary' value='Crear Perfil'>
                        </div>
                    </div>

                    <div class='form-group' >
                        <div class='col-lg-9 col-lg-offset-3'>        
                            <input type='reset' name='borrar' class='btn btn-primary' value='Borrar Campos'>
                        </div>
                    </div>

                </fieldset>
              </form>
          </div>
          </div>
        </div>
    </div>
<?php


 	}else
		echo "<h1><i>Esto no te pertenece.</i></h1>";
?>		