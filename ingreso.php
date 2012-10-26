<?php
include ('funciones.php');
if (verificar_usuario()){
	echo "Sesion de: ".$_SESSION['usuario_direccion'];

} else {
	header('Location:ingresa.php');
}

?>