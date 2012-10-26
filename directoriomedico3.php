<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");

	$titulo=$_REQUEST['titulo'];
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$especialidad=$_REQUEST['especialidad'];
	$telefono=$_REQUEST['telefono'];
	$email=$_REQUEST['email'];
	$descripcion=$_REQUEST['descripcion'];
?>
<h2><span><?php echo $titulo;?> </span><?php echo $nombre." ".$apellido;?></h2>
		<div id="fbox1">
			<p><img src="images/noticias/noticia1.gif" width="320" height="240" alt="" /></p>
		</div>
		<div align="justify">
        	<?php echo "Especialidad: ".$especialidad;?>
            <br />
            <br />
            <?php echo "Teléfono: ".$telefono;?>
            <br />
            <br />
            <?php echo "Email: ".$email;?>
            <br />
            <br />
            <?php echo $descripcion;?>
		</div>


                                                          
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>