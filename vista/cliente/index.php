<?php 

require_once("../../conexion/bd.php");
require_once("../../modelo/empresa_modelo.php");
require_once("../../controlador/empresa_controlador.php");

foreach(buscar_informacion() as $informacion){

	/*echo $informacion['historia']; 
	echo $informacion['mision'];
	echo $informacion['vision'];
	
//Para cada pagina tienes que hacer este procedimiento.*/
	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../cliente/css/estilo.css"/>
	<script src="../js/jquery-1.11.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>MGTOPOGRAFIA</title>
	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
		<div class="container"> 
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> 
					<i class="fa fa-bars"></i> 
					<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top"> 
					<i class="fa fa-creative-commons"></i> 
					<span class="light">MG Topografia</a> 
			</div> 
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse"> 
				<ul class="nav navbar-nav"> 
					<li class="hidden active">
						<a href="#page-top"></a> 
					</li> 
					<li class=""> 
						<a href="#page-top">inicio</a> 
					</li> 
					<li class=""> 
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos? <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#nosotros">Mision</a></li>
				            <li><a href="#">Vision</a></li>
				            <li><a href="#">Reseña Historica</a></li>
			          	</ul>
			        </li>
					<li class=""> 
						<a href="#calidad">Calidad</a> 
					</li> 
					<li class=""> 
						<a href="#servicios">Servicios</a> 
					</li> 
					<li class=""> 
						<a  href="#areatrabajo">Area de Trabajo</a> 
					</li> 
					<li class=""> 
						<a href="#galeria">Galeria</a> 
					</li> 
					<li class=""> 
						<a href="#contacto">Contacto</a> 
					</li> 
				</ul> 
			</div> 
		</div> 
	</nav>
	
	<div id="page-top" class="container-fluid full">
		<h1>inicio</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>

	<div id="nosotros" class="container-fluid full">
		<h1>nosotros</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="calidad" class="container-fluid full">
		<h1>calidad</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="servicios" class="container-fluid full">
		<h1>servicios</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="areatrabajo" class="container-fluid full">
		<h1>areatrabajo</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="galeria" class="container-fluid full">
		<h1>galeria</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="contacto" class="container-fluid full">
		<h1>contacto</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>

</body>
</html>