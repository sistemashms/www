<?PHP
    include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");

		$id=$_REQUEST['id'];
	$titulo=$_REQUEST['titulo'];
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$especialidad=$_REQUEST['especialidad'];
	$telefono=$_REQUEST['telefono'];
	$email=$_REQUEST['email'];
	$descripcion=$_REQUEST['descripcion'];
?>

<div align="center">
<form id="form1" method="post" action="modificardirectoriomedico2.php">
                              <label>ID<input type="text" name="id" id="id" value="<?php echo $id;?>"/></label>
                                	<label>Titulo<input type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>"/></label>
                                    <label>Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>"/></label>
                                    <label>Apellido<input type="text" name="apellido" id="apellido" value="<?php echo $apellido;?>"/></label>
                                    <?php $esp=$especialidad; ?>
                                    <label>Especialidad<select name="especialidad" id="especialidad" > 
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