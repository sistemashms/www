<?PHP
include ('ingreso.php');
?>
<html>
<body>



 
  <?php
$titulo=$_POST['titulo'];
$corta=$_POST['corta'];
$larga=$_POST['larga'];
$imagen=$_POST['imagen'];
$connect=mysql_connect("localhost","root","")or die("no se conecto");
mysql_select_db("paginahms");
$fecha=time();



	$query="SELECT * FROM noticias";
	$query="insert into noticias values ('','$titulo','$corta','$larga','$imagen',$fecha)";
	$resultado=mysql_query($query) or die(mysql_error());



//$query="SELECT * FROM materias";
//$query="insert into materias values ('$id_materia','$nombre_materia','$profesor','$grupo','$ciclo')";
//$resultado=mysql_query($query) or die(mysql_error());



//$query1="UPDATE calificaciones SET id_materia='$id_materia' WHERE grupo_materia LIKE '$grupo'";
	//$results1=mysql_query($query1)or die (mysql_error());




?>
<script language="javascript"> alert("REGISTRO COMPLETO");
	document.location.href="inicio.php";
	</script>
</body>
</html>