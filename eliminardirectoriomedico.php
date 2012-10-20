<?PHP
include ('ingreso.php');

	$id=$_REQUEST['id'];
	$connect=mysql_connect("localhost","root","") or die ("ERROR EN CONEXION");
	mysql_select_db("paginahms");
	
	$query="delete from directoriomedico where id LIKE '$id'";
	$resultado=mysql_query($query) or die(mysql_error());
	
?>
	<script language="javascript">
	document.location.href="modificardirectoriomedico.php";
	</script>

<body>
</body>
</html>
