<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : LoveRomance 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120923

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
tabla {
	color: #000;
}
.tablas {
	color: #000000;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.tablas {
	color: #000;
}
</style>
<head>

<link href="css/bootstrap.css" rel="stylesheet" />
<script type="text/javascript" async="" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" async="" src="js/bootstrap.js"></script>

 <meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<title>Hospital Médica Sierra</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>


            
<div id="header">
	<div id="logo">
		<img src="images/logo.png" alt="" width="110" height="110" />
	</div>
	<div id="menu">
		
        
        
        
        
        
        <div id="navbar-example" class="navbar navbar-static menu">
              <div class="">
                <div class="container" style="width: auto;">
                  <a class="brand" href="inicio.php">Inicio</a>
                  
            <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Directorio Medico<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="nuevodirectoriomedico.php">Nuevo</a></li>
                        <li><a tabindex="-1" href="modificardirectoriomedico.php">Modificar o eliminar</a></li>
                        <li class="divider"></li>
                      </ul>
                    </li>
                  </ul>
            
            <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="nuevousuario.php">Nuevo</a></li>
                        <li><a tabindex="-1" href="modificarusuario.php">Modificar o eliminar</a></li>
                        <li class="divider"></li>
                      </ul>
                    </li>
                  </ul>
            
            <a class="brand" href="salir.php">Salir</a>
            
            
            
            
                </div>
              </div>
            </div>
        
        
        
        
        
        
        
        
	</div>
  <p class="TITULO">Hospital</p>
  <p class="TITULO">Medica Sierra</p>
</div>
<div id="banner-wrapper">
	<table width="60%"  align="center" >
<tr>
  <th colspan="8" align="center"></th>
</tr>
<tr>
    <th align="center" class="tablas">TITULO</th>
  <th align="center" class="tablas">NOMBRE</th>
<th align="center" class="tablas">APELLIDO</th>
<th align="center" class="tablas">ESPECIALIDAD</th>
<th align="center" class="tablas">TELEFONO</th>
<th align="center" class="tablas">VER MAS</th>
</tr>


<span class="tablas">
<?php
$nombre=$_POST['nombre'];
		$connect= mysql_connect("localhost","root","")or die("ERROR EN CONEXION");
		mysql_select_db("paginahms");
		
		
	$query="SELECT * FROM directoriomedico WHERE nombre='$nombre'";
	$resultado=mysql_query($query) or die(mysql_error());


		if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
		extract($consulta);
		echo "<tr align='center'><td align='center'>".$consulta[1]."<td align='center'>".$consulta[2]."<td align='center'>".$consulta[3]."</td><td align='center'>".$consulta[4]."</td><td align='center'>".$consulta[5]."<td align='center'>"."<a href='directoriomedico3.php?id=$consulta[0]&&titulo=$consulta[1]&&nombre=$consulta[2]&&apellido=$consulta[3]&&especialidad=$consulta[4]&&telefono=$consulta[5]&&email=$consulta[6]&&descripcion=$consulta[7]'><img src='images/mas.png'>"."<td align='center'></td></tr>\n";  
	}
}else
	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
?>
</div>
</span>

<div id="footer">
	<p>Copyright (c) 2012 HospitalMedicaSierra.com. Todos los derechos reservados.</p>
</div>
</body>
</html>
