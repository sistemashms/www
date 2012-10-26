<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div align="center">

		<?php
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$puesto=$_REQUEST['puesto'];
	$usuario=$_REQUEST['usuario'];
	$pass=$_REQUEST['pass'];
?>
                              <form id="form1" method="post" action="modificarusuario2.php">
                                
                                    <label>Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>"/></label>
                                    <label>Apellido<input type="text" name="apellido" id="apellido" value="<?php echo $apellido;?>"/></label>
                                    <label>Puesto<input type="text" name="puesto" id="puesto" value="<?php echo $puesto;?>"/></label>
                                    <label>Usuario<input type="text" name="usuario" id="usuario" value="<?php echo $usuario;?>"/></label>
                               		<label>Contraseña<input type="password" name="pass" id="pass"/></label>
                               		<input type="submit" name="registrar" id="registrar" value="Guardar Cambios"/>
                                  
                              </form>
                            
	</div>
                       </div>     
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>
