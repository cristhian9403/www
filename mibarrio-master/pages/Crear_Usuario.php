<?php

	include ("perfil.php"); 
    //echo $_REQUEST['gestion'];
	$numero_error=$_REQUEST['gestion'];
    $_perfi = $c_usuario->get_Perfil();

    switch ($numero_error){ 
    default:
?>
    <div class="row">
        <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class='panel-heading'>
                <h2 class='panel-title text-center'>Crear Usuario</h2>
            </div>
            <div class=' panel-body'>
              <form action='../script/Crear_Usuario.php' method='post' class="form-horizontal">
                <fieldset>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Documento</label>
                        <div class='col-lg-9'>
                            <input type='text' name='n_id'  placeholder='Documento' required='required' class='form-control' />
                            <span class="help-block">Ayuda: el documento dede tener minimo 8 caracteres, (numerico).</span>
                        </div>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Tipo Documento:</label>
                        <div class='col-lg-9'>
                            <!-- Aqui el algoritmo para hacer un combobox para el genero -->
                            <select name='tipo_id' class='form-control'>
                                <option value='CC' selected>CC</option>
                                <option value='TI'>TI</option>
                                <option value='Pasap'>Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Nombres:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='nom'  placeholder='Nombres' required='required' class='form-control'/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 2 caracteres (Alfab&eacute;tico).</span>
                        </div>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Apellidos:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='apell'  placeholder='Apellidos' required='required' class='form-control'/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 2 caracteres (Alfab&eacute;tico).</span>
                        </div>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Usuario:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='usu'  placeholder='Usuario' required='required' class='form-control'/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 5 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Contraseña:</label>
                        <div class='col-lg-9'>
                            <input type='password' name='pass'  placeholder='Password' required='required' class='form-control' />
                            <span class="help-block">Ayuda: la contraseña debe tener un minimo de 5 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Pregunta:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='pregun'  placeholder='Pregunta' required='required' class='form-control' maxlength=150/>
                            <span class="help-block">Ayuda: la pregunta debe tener por lo menos 5 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Respuesta:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='respues'  placeholder='Respuesta' required='required' class='form-control' maxlength=150/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 2 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Ciudad:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='ciud' placeholder='Ciudad' required='required' class='form-control' maxlength=30/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 2 caracteres (Alfab&eacute;tico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Dirección:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='dire'  placeholder='Direcci&oacute;n' required='required' class='form-control' maxlength=30/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 3 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Edad:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='_edad'  placeholder='Edad' required='required' class='form-control' maxlength=3/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 1 caracteres (Numerico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Foto:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='fot'  placeholder='Foto' required='required' class='form-control' maxlength=400/>
                            <span class="help-block">Ayuda: la URL de la foto debe tener minimo 3 caracteres (Alfanum&eacute;rico).</span>
                        </div>
                    </div>
                    
                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Teléfono:</label>
                        <div class='col-lg-9'>
                            <input type='text' name='celu'  placeholder='Tel&eacute;fono' required='required' class='form-control' maxlength=10/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 8 caracteres (Numerico).</span>           
                        </div>
                    </div>

                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Correo Electrónico:</label>
                        <div class='col-lg-9'>        
                            <input type='text' name='e_mail'  placeholder='Correo Electr&oacute;nico' required='required' class='form-control' maxlength=30/>
                            <span class="help-block">Ayuda: este campo debe tener minimo 6 caracteres (Alfanum&eacute;rico)</span>
                        </div>
                    </div>

                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Genero :</label>
                        <div class='col-lg-9'>        
                            <select name='gene'  class='form-control'>
                                <option value='M' selected>M</option>
                                <option value='F'>F</option>
                            </select>  
                        </div>
                    </div>

                    <div class='form-group' >
                        <label  class='col-lg-3 control-label'>Seleccionar perfil:</label>
                        <div class='col-lg-9'> 
<?php       
                           //Aqui el algoritmo para hacer un combobox para los perfiles
                            $arr_perfiles = $m_perfil->mostrar_Todos();
                            $tam_perfiles = count($arr_perfiles);
                            $combobit = "";
                            for($i = 0; $i < $tam_perfiles; $i++){
                                if($c_usuario->get_Perfil() === $arr_perfiles[$i][0]){
                                    $_perfi = $arr_perfiles[$i][0];
                                    $combobit .=" <option value='".$arr_perfiles[$i][7]."' selected>".$arr_perfiles[$i][0]."</option>";
                                }
                                else $combobit .=" <option value='".$arr_perfiles[$i][7]."'>".$arr_perfiles[$i][0]."</option>";
                            }
                            if($c_perfil->get_PermisoSistema())
                                echo "<td><select name='perfi' class='form-control'>".$combobit."</select></td>";
                            else echo "<td><select name='perfi' class='form-control' disabled>".$combobit."</select></td>";
?>
                        </div>
                    </div>                                                       
                    
                    <div class='form-group' >
                        <div class='col-lg-9 col-lg-offset-3'>        
                            <input type='submit' name='crear' class='btn btn-primary' value='Registrar Usuario'>
                        </div>
                    </div>

                </fieldset>
              </form>
          </div>
          </div>
        </div>
    </div>
<?php
  


break;
case "exito1":
	echo "<div class='alert alert-dismissable alert-success'><h1><i>Se ha creado el usuario.</i></h1>
    <a href='Ver_Usuario.php?page=1' class='alert-link'>Ver usuarios</a></div><br>";
break; 
case "error2":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Documento' m&iacute;nimo: 8 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error3":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Nombres' m&iacute;nimo: 2 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error4":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Apellidos' m&iacute;nimo: 2 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error5":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Usuario' m&iacute;nimo: 5 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error6":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Contrase&ntilde;a' m&iacute;nimo: 5 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error7":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Pregunta' m&iacute;nimo: 10 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error8":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Respuesta' m&iacute;nimo: 2 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error9":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Tipo Documento' m&iacute;nimo: 2 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error10":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Ciudad' m&iacute;nimo: 2 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error11":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Direcci&oacute;' m&iacute;nimo: 3 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error12":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Edad' m&iacute;nimo: 1 caracter
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error13":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Foto' m&iacute;nimo: 3 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error14":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Tel&eacute;fono' m&iacute;nimo: 8 caracteres
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error15":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Correo Electr&oacute;nico' m&iacute;nimo: 6 caracteres</div><br>";
break;
case "error16":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'G&eacute;nero' m&iacute;nimo: 1 caracter
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error17":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Perfil' m&iacute;nimo: 1 caracter
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;


// tipo de dato


case "error18":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Documento' tipo de dato debe ser Num&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error19":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Usuario' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error20":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Nombres' tipo de dato debe ser Alfab&eacute;tico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error21":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Apellidos' tipo de dato debe ser Alfab&eacute;tico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error22":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Contrase&ntilde;a' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error23":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Pregunta' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error24":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Respuesta' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error25":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Ciudad' tipo de dato debe ser Alfab&eacute;tico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error26":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Edad' tipo de dato debe ser Num&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error27":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Foto' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error28":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Tel&eacute;fono' tipo de dato debe ser Num&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error29":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Correo Electr&oacute;nico' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error30":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: Validaci&oacute;n: 'Direcci&oacute;n' tipo de dato debe ser Alfanum&eacute;rico
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
break;
case "error31":
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado el usuario.</i></h1>";
    echo "<p>Error: El usuario con este Documento ya existe
    <a href=".$_SERVER["HTTP_REFERER"]." class='alert-link'>Volver</a></div><br>";
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
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/npm.js"></script>
    </body>
</html>