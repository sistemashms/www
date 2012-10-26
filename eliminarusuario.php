<?PHP
include ('ingreso.php');

	$id=$_REQUEST['id'];
	include("master_db.php");
	
	$query="delete from login where id LIKE '$id'";
	$resultado=mysql_query($query) or die(mysql_error());
	
?>
	<script language="javascript"> alert("ELIMINADO");
	document.location.href="modificarmaterias.php";
	</script>

<body>
</body>
</html>