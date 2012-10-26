<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
	<div align="center">
       
		
                              <form id="form1" method="post" action="login.php">
                                
                                    <label> Usuario 
                                    <input type="text" name="usuario" id="usuario" />
                                  </label>
                               
                                    <label> Contraseña
                                    <input type="password" name="id" id="id"/>
                                  </label>
                                    <input type="submit" name="ingresar" id="ingresar" value="Ingresar"/>
                                  
                               
                              </form>
                            </div>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>