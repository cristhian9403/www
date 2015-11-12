<?php

	include ("perfil.php"); 

    include_once '../modelos/Modelo_Cliente.php';
    include_once '../controladores/Controlador_Cliente.php';
    include_once '../controladores/Controlador_Producto.php'; 
    include_once '../controladores/Controlador_Categoria.php';
    include_once '../modelos/Modelo_Producto.php';
    include_once '../modelos/Modelo_Categoria.php';
    include_once '../modelos/Modelo_Factura.php';               
    include_once '../controladores/Controlador_Factura.php';
    //echo $_REQUEST['gestion'];
	$numero_error=$_REQUEST['gestion'];
    $_perfi = $c_usuario->get_Perfil(); 

    switch ($numero_error){ 
    default:
?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class='panel-heading'>
                <h2 class='panel-title text-center'>Crear Reporte</h2>
            </div>
            <div class=' panel-body'>
                <form action='../script/#.php' method='post' class="form-horizontal">
                    <fieldset>
                        <div class='form-group' >
                            <h3  class='col-lg-6 control-label'>Listado de Ventas</h3>
                        </div>
                        <div class='form-group' >
                            <label  class='col-lg-2 control-label'></label>
                            <span class='col-lg-4 control-label '>Crear un listado de ventas en un periodo determinado</span>
                        </div>
                        <div class='form-group' >
                            <label  class='col-lg-2 control-label'>Fecha Inicial:</label>
                            <div class='col-lg-2'> 
                                <input type="date" name="fechaI">
                            </div>
                            <label  class='col-lg-2 control-label'>Fecha Final:</label>
                            <div class='col-lg-2'> 
                                <input type="date" name="fechaF">
                            </div>
                        </div>
                        <div class='form-group' >
                            <div class='col-lg-9 col-lg-offset-3'>        
                                <input type='submit'  class='btn btn-primary' value='Crear'>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <hr>


          </div>
          </div>
        </div>
    </div>
<?php
  


break;
case 1:
	echo "<div class='alert alert-dismissable alert-success'><h1><i>Factura Creada</i></h1>
            <a class='btn btn-primary' href='Visualizar_Facturas.php'> Ok</a>
        </div'>";
break; 
case 2:
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado La Factura.</i></h1>";
    echo "<p>Error: El id de la factura ya existe </p>
            <a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a>
        </div><br>";
break;
case 3:
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha creado La Factura.</i></h1>";
    echo "<p>Error: Los Productos Ya Existen </p>
            <a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a>
        </div><br>";
break;
case 4:
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha Modificado La Factura.</i></h1>";
    echo "<p>Error: La factura debe tener 1 Producto como minimo </p>
            <a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a>
        </div><br>";
break;
case 5:
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha Modificado La Factura.</i></h1>";
    echo "<p>Error: No se encontro la Factura  </p>
            <a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a>
        </div><br>";
break;
case 6:
    echo "<div class='alert alert-dismissable alert-danger'><h1><i>No se ha Modificado La Factura.</i></h1>";
    echo "<p>Error: No se modificaron los productos  </p>
            <a class='btn btn-primary' href='javascript:history.back()'> Volver Atrás</a>
        </div><br>";
break;
case 7:
    echo "<div class='alert alert-dismissable alert-success'><h1><i>La Factura Fue Modificada </i></h1>
            <a class='btn btn-primary' href='Visualizar_Facturas.php'> Ok</a>
        </div'>";
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
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/npm.js"></script>
        <!--<script src="../js/formularioDinamico.js"></script>-->
    </body>
</html>