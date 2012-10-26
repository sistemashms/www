<?PHP
include ('ingreso.php');
?>
<title>EDITAR</title>
</head>
<?php
	
	$id=$_REQUEST['id'];
	$titulo=$_REQUEST['titulo'];
	$corta=$_REQUEST['corta'];
	$larga=$_REQUEST['larga'];
	
	
	include("master_db.php");
	
	$query="UPDATE noticias SET titulo='$titulo', corta='$corta',larga='$larga' WHERE id=$id";
	$resultado=mysql_query($query) or die(mysql_error());

	?>
	<script language="javascript"> alert("EDITADOS");
	document.location.href="modificardirectoriomedico.php";
	</script>

<body>
</body>
</html>