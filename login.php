<?php
include ('funciones.php');
//usuario y clave pasados por el formulario
$usuario = $_POST['usuario'];
$clave = $_POST['id'];
$encriptado=md5($clave);

//$encriptado=md5($clave);
//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($usuario, $encriptado)){
	//si es valido accedemos a ingreso.php
	header('Location:inicio.php');
} else {
	//si no es valido volvemos al formulario inicial
	header('Location:ingresa.php');
}
?>