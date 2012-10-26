<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
	<div align="center">
     
		
                              <form id="form1" method="post" action="contactanos2.php">
                                
                                    <label>Nombre    <input type="text" name="nombre" id="nombre" /></label>
                                    <label>E-mail    <input type="email" name="email" id="email"/></label>
                                    <label>Asunto    <input type="text" name="asunto" id="asunto"/></label>
                               		<textarea name="comentarios" id="comentarios" rows="10" placeholder="Escribe aqui tus comentarios" cols="100"></textarea>
                                    <br />
                           			<label><input type="submit" name="enviar" id="enviar"/></label>
                               
                              </form>
                            
                          </div>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>