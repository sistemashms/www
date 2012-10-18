<?PHP
include ('ingreso.php');
?>
<title>EDITAR</title>
</head>
<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$puesto=$_POST['puesto'];
	$usuario=$_POST['usuario'];
	$clave=$_POST['pass'];
	$encriptado=md5($clave);

	
	
	$connect=mysql_connect("localhost","root","") or die ("ERROR EN CONEXION");
	mysql_select_db("paginahms");
	
	$query="UPDATE login SET nombre='$nombre', apellido='$apellido', puesto='$puesto', pass_administrador='$encriptado' WHERE usuario_administrador LIKE '$usuario'";
	$resultado=mysql_query($query) or die(mysql_error());

	?>
	<script language="javascript"> alert("EDITADOS");
	document.location.href="modificarusuario.php";
	</script>

<body>
</body>
</html>
