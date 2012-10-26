<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div align="center">

	<table width="60%" class="table table-hover" align="center" >
<tr>
  <th align="center"><span class="tablas">ID</span></span></th>
  <th align="center" class="tablas">NOMBRE</th>
<th align="center" class="tablas">APELLIDO</th>
<th align="center" class="tablas">PUESTO</th>
<th align="center" class="tablas">USUARIO</th>
<th align="center" class="tablas">EDITAR</th>
</tr>


<span class="tablas">
<?php
		include("master_db.php");
		$bandera=0;
		$query="SELECT * FROM login WHERE usuario_administrador='".$_SESSION['usuario_direccion']."' AND superusuario = 0";
	$resultado=mysql_query($query) or die(mysql_error());
	if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
			$bandera=1;
		extract($consulta);
			echo "<tr align='center'><td align='center'>".$consulta[0]."</td><td align='center'>".$consulta[1]."<td align='center'>".$consulta[2]."<td align='center'>".$consulta[3]."</td><td align='center'>".$consulta[4]."<td align='center'>"."<a href='modificarusuario1.php?id=$consulta[0]&&nombre=$consulta[1]&&apellido=$consulta[2]&&puesto=$consulta[3]&&usuario=$consulta[4]&&pass=$consulta[5]'><img src='images/editar.png'></td></tr>\n";  
		}}
else{
	 	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
}

if($bandera==0)
{
$query2="SELECT * FROM login";
	$resultado2=mysql_query($query2) or die(mysql_error());
	if ($resultado2!=0)
		{
		while ($consulta2=mysql_fetch_array($resultado2))
		{
		extract($consulta2);
			echo "<tr align='center'><td align='center'>".$consulta2[0]."</td><td align='center'>".$consulta2[1]."<td align='center'>".$consulta2[2]."<td align='center'>".$consulta2[3]."</td><td align='center'>".$consulta2[4]."</td><td align='center'>"."<a href='modificarusuario1.php?id=$consulta[0]&&nombre=$consulta[1]&&apellido=$consulta[2]&&puesto=$consulta[3]&&usuario=$consulta[4]&&pass=$consulta[5]'><img src='images/editar.png'></td>"."<td align='center'>"."<a href='eliminarusuario.php?id=$consulta[0]'><img src='images/borrar.gif'>"."</tr>\n";  
		}}
else{
	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
}
}


		
	
?>
</div>
</span>

