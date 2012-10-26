<html>
<body>
  <?php
$uno=$_POST['nombre'];
$dos=$_POST['email'];
$tres=$_POST['asunto'];
$cuatro=$_POST['comentarios'];
include("master_db.php");

if($uno!=NULL && $dos!=NULL && $tres!=NULL && $cuatro!=NULL)
{
	$query="SELECT * FROM contactanos";
	$query="insert into contactanos values ('','$uno','$dos','$tres','$cuatro')";
	$resultado=mysql_query($query) or die(mysql_error());
	?>
	<script language="javascript"> alert("COMENTARIO ENVIADO SATISFACTORIAMENTE");	</script>
<?php
}else
{
	?>
	<script language="javascript"> alert("COMPLETA LOS CAMPOS FALTANTES PARA PODER MANDAR TU COMENTARIO");	</script>
<?php	}
?>
	</script>
</body>
</html>