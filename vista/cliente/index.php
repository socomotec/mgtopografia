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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../cliente/css/estilo.css"/>
	<script src="../js/jquery-1.11.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	

	<title>MGTOPOGRAFIA</title>
	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
		<div class="container"> 
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menus"> 
					
					<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">  
					<span class="light"> MG Topografía</a> 
			</div> 
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="menus"> 
				<ul class="nav navbar-nav"> 
					<li class="hidden active">
						<a href="#page-top"></a> 
					</li> 
					<li class=""> 
						<a href="#page-top">Inicio</a> 
					</li> 
					<li class=""> 
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Quiénes Somos? <span class="caret"></span></a>
			          	<ul class="dropdown-menu" >
			          		<li><a href="#nosotros">Reseña Histórica</a></li>
				            <li ><a href="#nosotros">Misión</a></li>
				            <li><a href="#nosotros">Visión</a></li>
			          	</ul>
			        </li>
					<li class=""> 
						<a href="#calidad">Calidad</a> 
					</li> 
					<li class=""> 
						<a href="#servicios">Servicios</a> 
					</li> 
					<li class=""> 
						<a  href="#areatrabajo">Áreas de Trabajo</a> 
					</li> 
					<li class=""> 
						<a href="#galeria">Galería</a> 
					</li> 
					<li class=""> 
						<a href="#contacto">Contacto</a> 
					</li> 
				</ul> 
			</div> 
		</div> 
	</nav>

	<div id="page-top" class="container-fluid full">
		<h1>Inicio</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>

	<div id="nosotros" class="container-fluid full">
		<h1>Nosotros</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="calidad" class="container-fluid full">
		<h1>Calidad</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="servicios" class="container-fluid full">
		<h1>Servicios</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="areatrabajo" class="container-fluid full">
		<h1>Áreas de Trabajo</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="galeria" class="container-fluid full">
		<h1>Galería</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="contacto" class="container-fluid full">
		<h1>Contacto</h1>
		
	</div>
	<footer class="footer">
      <div class="container">
        <div class="row">
	        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
		        <h5 class="text-muted text-center">MGTOPOGRAFÍA </h5>
		        <hr />
		        <a href="../administrador/panel_administrativo.php"> <h6 class=""> Administrador </h6> </a>
		        <a href=""> <h6 class=""> Cliente </h6> </a>
	    	</div>
	    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
		        <h5 class="text-muted text-center"> <i class="fa fa-rss" aria-hidden="true"></i> RRSS: </h5>
		        <hr />

		        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		        	<p class="text-right"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </p>
		        </div>
		        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		       	 <i class="fa fa-instagram" aria-hidden="true"></i>
		        </div>

	    	</div>
        </div>
        <div class="row">
        	<p class="text-center"> Desarrollada por <a href="http://www.socomtec.cl"> SOCOMTEC LTDA </a> </p>
        </div>
      </div>
</footer>
<script>

		$('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#menus a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
	</script>
</body>
</html>