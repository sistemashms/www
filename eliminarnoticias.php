<?PHP
include ('ingreso.php');

	$id=$_REQUEST['id'];
	$nombre=$_REQUEST['nombre'];
	include("master_db.php");
	
	$query="delete from noticias where id LIKE '$id'";
	$resultado=mysql_query($query) or die(mysql_error());
	
	unlink("/images/noticias/".$nombre);
?>
	<script language="javascript">
	document.location.href="modificarnoticias.php";
	</script>

<body>
</body>
</html>