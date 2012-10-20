<?PHP
include ('ingreso.php');
?>
<html>
<body>
  <?php
$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$descripcion=$_POST['descripcion'];
$connect=mysql_connect("localhost","root","")or die("no se conecto");
mysql_select_db("paginahms");

	$query="SELECT * FROM directoriomedico";
	$query="insert into directoriomedico values ('','$titulo','$nombre','$apellido','$especialidad','$telefono','$email','$descripcion')";
	$resultado=mysql_query($query) or die(mysql_error());
?>
<script language="javascript"> alert("REGISTRO COMPLETO");
	document.location.href="inicio.php";
	</script>
</body>
</html>