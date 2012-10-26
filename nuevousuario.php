<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div align="center">
                              <form id="form1" method="post" action="nuevousuario2.php">
                                
                                    <label>Nombre<input type="text" name="nombre" id="nombre" /></label>
                                    <label>Apellido<input type="text" name="apellido" id="apellido" /></label>
                                    <label>Puesto<input type="text" name="puesto" id="puesto" /></label>
                                    <label>Usuario<input type="text" name="usuario" id="usuario" /></label>
                               		<label>Contraseña<input type="password" name="id" id="id"/></label>
                               		<input type="submit" name="registrar" id="registrar" value="Registrar"/>
                                  
                              </form>
                            
 </div>     
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>


