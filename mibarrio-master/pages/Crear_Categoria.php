<?php

	include ("perfil.php"); 

	$numero_error=$_REQUEST['gestion'];



switch ($numero_error){ 
 default:
 	//todo lo de Modificar el usuario
 	$_perfi = $c_usuario->get_Perfil();
    echo"<div class='row panel  col-lg-6 col-lg-offset-3'>
        <div class=' panel panel-primary '>";
                                
    echo "<div class='panel-heading'>
                <h2 class='panel-title text-center'>Crear Categoria</h2>
            </div>
            <div class=' panel-body'>";
 	 echo"<form action='../script/Crear_Categoria.php' method='post'>";

		echo "<table class='table table-striped table-hover '>
                      <tr>
                        <td>
                            Id:
                        </td>
                        <td>
                            <input type='text' name='id' class='form-control' placeholder='minimo 4 caracteres' required='required' maxlength=30/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre:
                        </td>
                        <td>
                        	<input type='text' name='nombre' class='form-control' placeholder='minimo 2 caracteres' required='required' maxlength=30/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Descripcion:
                        </td>
                        <td>
                        	<input type='text' name='descripcion' class='form-control' placeholder='minimo 15 caracteres' required='required' maxlength=500/>
                        </td>  
                    </tr>                  
                </table>
					  <input type='submit' name='crear' class='btn btn-primary' value='Crear Categoria'>
                      <button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>
            </div><br><br>";



		echo"</fomr>
        </div>
        </div>";


break;
case "error1":
	echo "<h1><i>Se ha creado la Categoria.</i></h1>";
    echo "<a href='/mibarrio/pages/Visualizar_Categorias.php?page=1' class='btn btn-default'>Ok</a>";
break; 
case "error2":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Id' m&iacute;nimo: 5 caracteres y maximo 13 caracteres</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error3":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Nombre' m&iacute;nimo: 2 caracteres y maximo 30 caracteres</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error4":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: Tama&ntilde;o 'Descripcion' m&iacute;nimo: 15 caracteres y maximo 500 caracteres</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error5":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: 'Id' debe ser numerico</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error6":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: 'Nombre' debe ser alfanumerico</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error7":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: 'Descripcion' debe ser alfanumerico</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
case "error8":
    echo "<div class='login-help'><h1><i>No se ha creado la Categoria.</i></h1>";
    echo "<p>Error: 'Ya existe una categoria con el mismo Id o el mismo Nombre</div><br>";
    echo "<button type='button' class='btn btn-primary' onclick='history.back()'>Atras</button>";
break;
}
?>
</div>
        </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/npm.js"></script>
    </body>
</html>