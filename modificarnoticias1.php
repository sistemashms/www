<?PHP
    include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");

		$id=$_REQUEST['id'];
	$nombre=$_REQUEST['nombre'];
	$titulo=$_REQUEST['titulo'];
	$corta=$_REQUEST['corta'];
	$larga=$_REQUEST['larga'];
?>

<div align="center">
 <form id="form1" method="post" action="modificarnoticias2.php" enctype="multipart/form-data">
                              
                                	<label>Id<input type="text" name="id" id="id" value="<?php echo $id;?>"/></label>
                                    <label>Titulo<input type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>"/></label>
                                    <label>Descripción corta<input type="text" name="corta" id="corta" value="<?php echo $corta;?>"/></label>
                                    <textarea name="larga" id="larga" rows="10" placeholder="Escriba aqui la noticia completa" cols="100"><?php echo $larga;?></textarea>
                                    <br />
                                    <br />
                                    <input type="submit" name="guardar" id="guardar" value="Guardar Cambios"/>
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
        
		<option value="<?php echo $consulta[0];?>" <?php if ($consulta[0] == $esp) echo ' selected="selected"'; ?>><?php echo "$especialidad"; ?> </option>
        
        <br />
		<?php 
		}
	}
}else
	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	


?>
  </select></label>                    
                                    
                                    
            
                                    <label>Teléfono<input type="text" name="telefono" id="telefono" value="<?php echo $telefono;?>"/></label>
                               		<label>Email<input type="text" name="email" id="email" value="<?php echo $email;?>"/></label>
                                    <label>Descripción<textarea name="descripcion" id="descripcion" rows="10" cols="100"><?php echo $descripcion;?></textarea></label>
                               		<input type="submit" name="guardar" id="guardar" value="Guardar Cambios"/>
                                  
                              </form>
                                                          
                     </div>     
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>