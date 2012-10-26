<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>

	<table width="60%" class="table table-hover" align="center" style="font-size:small;">


<tr>
    <th align="center" class="tablas">IMAGEN</th>
  <th align="center" class="tablas">TITULO</th>
<th align="center" class="tablas">REDACCIÓN CORTA</th>
<th align="center" class="tablas">NOTICIA COMPLETA</th>
<th align="center" class="tablas">FECHA</th>
<th align="center" class="tablas">BORRAR</th>
<th align="center" class="tablas">EDITAR</th>
</tr>


<span class="tablas">
<?php
		
		include("master_db.php");
		
	$query="SELECT * FROM noticias ORDER BY fecha DESC";
	$resultado=mysql_query($query) or die(mysql_error());


		if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
		extract($consulta);
		echo "</td><td align='center'>".$consulta[1]."<td align='center'>".$consulta[2]."<td align='center'>".$consulta[3]."</td><td align='center'>".$consulta[4]."</td><td align='center'>".$consulta[5]."</td><td align='center'>"."<a href='eliminarnoticias.php?id=$consulta[0]&&nombre=$consulta[1]'><img src='images/borrar.gif'>"."</td><td align='center'>"."<a href='modificarnoticias1.php?id=$consulta[0]&&nombre=$consulta[1]&&titulo=$consulta[2]&&corta=$consulta[3]&&larga=$consulta[4]'><img src='images/editar.png'></td></tr>\n";  
	}
}else
{	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
}


?>