<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div align="center">
		<form id="form1" method="post" action="directoriomedico2.php">
                                
                                	<input type="text" name="datos" id="datos" class="span4" placeholder="   Apellido del médico, Nombre del médico"/>
                                    <br />
                           			<label><input type="submit" name="buscar" id="Buscar"/></label>
                               
                              </form>
</div>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>