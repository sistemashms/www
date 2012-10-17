<style type="text/css">
<!--
body,td,th {
	color: #CCCCCC;
}
-->
</style><?php
include ('funciones.php');
if (verificar_usuario()){
	print "Sesion de: $_SESSION[usuario_direccion]          ";
	print "<a href='salir.php'/>Cerrar Sesion</a>";
} else {
	header('Location:ingresa.php');
}
?>