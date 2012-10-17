<?php
function conexiones($usuario, $encriptado) {
	$conectar = mysql_connect('localhost','root','');
	mysql_select_db("paginahms");
	$sql = "SELECT * FROM login WHERE usuario_administrador='$usuario' AND pass_administrador='$encriptado'";
	$ejecutar_sql=mysql_query($sql,$conectar);
	if (mysql_num_rows($ejecutar_sql)!=0){
		session_start();
		$_SESSION['usuario_direccion']=$usuario;
		return true;
	} else {
		return false;
	}
}
function verificar_usuario(){
	session_start();
	if ($_SESSION['usuario_direccion']){
		return true;
	}
}
?>