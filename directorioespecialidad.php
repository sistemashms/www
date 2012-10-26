<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div id="footer-content" align="center">

<form id="form1" method="post" action="directoriomedico2.php">
<select name="datos" id="datos">
<?php 
include("master_db.php");

$query="SELECT DISTINCT especialidad FROM directoriomedico ORDER BY especialidad ASC";
	$resultado=mysql_query($query) or die(mysql_error());


		if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
		extract($consulta);
		
		if($consulta[0]!=NULL)
		{
		?>
        
		<option value="<?php echo "$consulta[0]" ?>"><?php echo "$consulta[0]" ?></option>
        <br />
		<?php
		}
	}
}else
	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	


?>
  </select>

 <br />
                           			<label><input type="submit" name="buscar" id="Buscar"/></label>
                                    </form>
</div>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>