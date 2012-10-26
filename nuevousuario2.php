<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$puesto=$_POST['puesto'];
$usuario=$_POST['usuario'];
$clave=$_POST['id'];
$encriptado=md5($clave);



include("master_db.php");




	$query="SELECT * FROM login";
	$query="insert into login values ('','$nombre','$apellido','$puesto','$usuario','$encriptado',0)";
	$resultado=mysql_query($query) or die(mysql_error());

?>
<div align="center">


<script language="javascript"> alert("REGISTRO COMPLETO");
	document.location.href="inicio.php";
	</script>


 </div>     
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>

