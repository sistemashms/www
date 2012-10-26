<?PHP
include ('ingreso.php');
?>
<title>EDITAR</title>
</head>
<?php
	
	$id=$_REQUEST['id'];
	$titulo=$_REQUEST['titulo'];
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$especialidad=$_REQUEST['especialidad'];
	$telefono=$_REQUEST['telefono'];
	$email=$_REQUEST['email'];
	$descripcion=$_REQUEST['descripcion'];

	
	
	include("master_db.php");
	
	$query="UPDATE directoriomedico SET titulo='$titulo', nombre='$nombre', apellido='$apellido', especialidad='$especialidad', telefono='$telefono', email='$email', descripcion='$descripcion' WHERE id=$id";
	$resultado=mysql_query($query) or die(mysql_error());

	?>
	<script language="javascript"> alert("EDITADOS");
	document.location.href="modificardirectoriomedico.php";
	</script>

<body>
</body>
</html>