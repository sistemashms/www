<?PHP
include ('ingreso.php');

	$id=$_REQUEST['id'];
	include("master_db.php");
	
	$query="delete from directoriomedico where id LIKE '$id'";
	$resultado=mysql_query($query) or die(mysql_error());
	
?>
	<script language="javascript">
	document.location.href="modificardirectoriomedico.php";
	</script>

<body>
</body>
</html>