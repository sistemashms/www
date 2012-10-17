<?PHP
//include ('ingreso.php');
?>
<html>
<body>
  <?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$puesto=$_POST['puesto'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$connect=mysql_connect("localhost","root","")or die("no se conecto");
mysql_select_db("paginahms");




	$query="SELECT * FROM login";
	$query="insert into login values ('$nombre','$apellido','$puesto','$usuario','$encriptado')";
	$resultado=mysql_query($query) or die(mysql_error());



//$query="SELECT * FROM materias";
//$query="insert into materias values ('$id_materia','$nombre_materia','$profesor','$grupo','$ciclo')";
//$resultado=mysql_query($query) or die(mysql_error());



//$query1="UPDATE calificaciones SET id_materia='$id_materia' WHERE grupo_materia LIKE '$grupo'";
	//$results1=mysql_query($query1)or die (mysql_error());




?>
<script language="javascript"> alert("REGISTRO COMPLETO");
	document.location.href="insertarmateria.php";
	</script>
</body>
</html>