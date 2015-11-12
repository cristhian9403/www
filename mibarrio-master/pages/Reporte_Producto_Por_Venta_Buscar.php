<?php

    include ("perfil.php"); 

?>
    <div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
    <div class='panel-heading'>
    <h2 class='panel-title text-center'>Crear Reporte</h2>
    </div>
    <div class=' panel-body'>
    <form action='Reporte_Producto_Por_Venta.php' method='post' class="form-horizontal">
        <fieldset>
        <div class='form-group' >
            <h3  class='col-lg-6 control-label'>Listado de producto por venta</h3>
        </div>
        <div class='form-group' >
            <label  class='col-lg-2 control-label'></label>
            <span class='col-lg-4 control-label '>Crear un listado de productos por venta en un periodo determinado</span>
        </div>
        <div class='form-group' >
            <label  class='col-lg-2 control-label'>Fecha Inicial:</label>
            <div class='col-lg-2'> 
                <input type="date" name="fecha1">
            </div>
            <label  class='col-lg-2 control-label'>Fecha Final:</label>
            <div class='col-lg-2'> 
                <input type="date" name="fecha2">
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
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>