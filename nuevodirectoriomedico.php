<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>
<div align="center">
		
                              <form id="form1" method="post" action="nuevodirectoriomedico2.php">
                              
                                	<label>Titulo<input type="text" name="titulo" id="titulo" /></label>
                                    <label>Nombre<input type="text" name="nombre" id="nombre" /></label>
                                    <label>Apellido<input type="text" name="apellido" id="apellido" /></label>
                                    <label>Especialidad<select name="especialidad" id="especialidad">
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
  </select></label>
                                    <label>Teléfono<input type="text" name="telefono" id="telefono" /></label>
                               		<label>Email<input type="text" name="email" id="email"/></label>
                                    <label>Descripción<textarea name="descripcion" id="descripcion" rows="10" cols="100"></textarea></label>
                               		<input type="submit" name="registrar" id="registrar" value="Registrar"/>
                                  
                              </form>
                       </div>     
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>