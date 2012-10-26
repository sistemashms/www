<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_contenido1.php");
?>
<img src="images/pics01.png" width="1000" height="345" alt="" />
<?php
	include("master_contenido2.php");
	include("master_segundocontenido1.php");

?>
	<script type="text/javascript" src="swfobject.js"></script>
	

<div id="flashcontent" style="margin: -100px 0 0 -280px;">Para ver las imagenes requieres JavaScript y Flash Player. <a href="http://www.macromedia.com/go/getflashplayer/">Descargalos desde aquí</a> </div>	
	<script type="text/javascript">
		var fo = new SWFObject("autoviewer.swf", "autoviewer", "100%", "100%", "8", "#FFFFFF");		
				
		//Optional Configuration
		//fo.addVariable("langOpenImage", "Open Image in New Window");
		//fo.addVariable("langAbout", "About");	
		//fo.addVariable("xmlURL", "gallery.xml");					
		
		fo.write("flashcontent");	
		
	</script>	
	<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>