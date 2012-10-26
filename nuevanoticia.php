<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
	
	
?>
<div align="center">
		
        
                              <form id="form1" method="post" action="nuevanoticia2.php" enctype="multipart/form-data">
                              
                                	<label>Titulo<input type="text" name="titulo" id="titulo"/></label>
                                    <label>Descripción corta<input type="text" name="corta" id="corta" /></label>
                                    <textarea name="larga" id="larga" rows="10" placeholder="Escriba aqui la noticia completa" cols="100"></textarea>
                                    <br />
                                        <input id="imagen" name="imagen" size="30" type="file" />
 
                                    <br />
                                    <input type="submit" name="guardar" id="guardar" value="Guardar"/>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>