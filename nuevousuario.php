<?PHP
include ('ingreso.php');
?>
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
                  
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                       <a id="drop1" href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Noticias<b class="caret"></b></a> 
                       <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="nuevanoticia.php">Nueva </a></li>
                        <li><a tabindex="-1" href="eliminarnoticia.php">Eliminar</a></li>
                        <li><a tabindex="-1" href="modificarnoticia.php">Modificar</a></li>
                        <li class="divider"></li>
                      </ul>
                    </li>
                  </ul>
            
            <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Directorio Medico<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="nuevodirectoriomedico.php">Nuevo</a></li>
                        <li><a tabindex="-1" href="eliminardirectoriomedico.php">Eliminar</a></li>
                        <li><a tabindex="-1" href="modificardirectoriomedico.php">Modificar</a></li>
                        <li class="divider"></li>
                      </ul>
                    </li>
                  </ul>
            
            <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="nuevousuario.php">Nuevo</a></li>
                        <li><a tabindex="-1" href="eliminarusuario.php">Eliminar</a></li>
                        <li><a tabindex="-1" href="modificarusuario.php">Modificar</a></li>
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
  <p class="TITULO">Médica Sierra</p>
</div>

<div id="footer-wrapper">
	<div id="footer-content" align="center">
		
                              <form id="form1" method="post" action="nuevousuario2.php">
                                
                                    <label>Nombre<input type="text" name="nombre" id="nombre" /></label>
                                    <label>Apellido<input type="text" name="apellido" id="apellido" /></label>
                                    <label>Puesto<input type="text" name="puesto" id="puesto" /></label>
                                    <label>Usuario<input type="text" name="usuario" id="usuario" /></label>
                               		<label>Contraseña<input type="password" name="id" id="id"/></label>
                               		<input type="submit" name="registrar" id="registrar" value="Registrar"/>
                                  
                              </form>
                            
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2012 HospitalMedicaSierra.com. Todos los derechos reservados.</p>
</div>
</body>
</html>
