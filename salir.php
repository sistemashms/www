<?php
include ('funciones.php');
if (verificar_usuario()){
	session_unset();
	session_destroy();
	header ('Location:index.php');
} else {
	header ('Location:inicio.php');
}
?>