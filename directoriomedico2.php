<?PHP
include("master_encabezado1.php");
include("master_menu1.php");
include("master_encabezado2.php");
include("master_segundocontenido1.php");
?>
	<table width="60%" class="table table-hover" align="center" >
<tr>
    <th align="center" class="tablas">TITULO</th>
  <th align="center" class="tablas">NOMBRE</th>
<th align="center" class="tablas">APELLIDO</th>
<th align="center" class="tablas">ESPECIALIDAD</th>
<th align="center" class="tablas">TELEFONO</th>
<th align="center" class="tablas">VER MAS</th>
</tr>


<span class="tablas">
<?php
$datos=$_POST['datos'];
		include("master_db.php");
		
		
	$query="SELECT * FROM directoriomedico WHERE nombre LIKE '%$datos%' OR apellido LIKE '%$datos%' OR especialidad LIKE '%$datos%'";
	$resultado=mysql_query($query) or die(mysql_error());


		if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
		extract($consulta);
		echo "<tr align='center'><td align='center'>".$consulta[1]."<td align='center'>".$consulta[2]."<td align='center'>".$consulta[3]."</td><td align='center'>".$consulta[4]."</td><td align='center'>".$consulta[5]."<td align='center'>"."<a href='directoriomedico3.php?id=$consulta[0]&&titulo=$consulta[1]&&nombre=$consulta[2]&&apellido=$consulta[3]&&especialidad=$consulta[4]&&telefono=$consulta[5]&&email=$consulta[6]&&descripcion=$consulta[7]'><img src='images/mas.png'></td></tr>\n";  
	}
}else
	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
?>
</div>
</span>
