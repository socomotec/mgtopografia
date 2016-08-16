<?php 

require_once("../../conexion/bd.php");
require_once("../../modelo/empresa_modelo.php");
require_once("../../controlador/empresa_controlador.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../cliente/css/estilo.css"/>
	<script src="../js/jquery-1.11.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
	
	<title>MGTOPOGRAFIA</title>
	
</head>
<body >
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
		
		<div class="container"> 
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menus" style="margin-top:10px;"> 
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
				</button>

				<a id="img-principal-lg" class="page-scroll visible-lg" href="#page-top"> <img class="img-principal" src="imagenes/mgtopo.png" alt="Brand"> </a>	
				<a id="img-principal-md" class="page-scroll visible-md" href="#page-top"> <img class="img-principal-md" src="imagenes/mgtopo.png" alt="Brand"> </a>	
				<a class="navbar-brand page-scroll visible-sm visible-xs" href="#page-top"> <img class="img-principal-md " src="imagenes/mgtopo.png" alt="Brand"> </a>		
				
			</div>
			<div id="div-brs">
				<br class="visible-lg">
				<br class="visible-lg">
				<br class="visible-md">
			</div>
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="menus">	

				<ul class="nav navbar-nav"> 
					<li class="hidden active">
						<a href="#page-top"></a> 
					</li>

					<li> 
						<a class=" zoom visible-xs visible-sm" href="#page-top"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> &nbsp; Inicio </a> 
						<a class=" zoom hidden-xs hidden-sm" href="#page-top"> <i class="fa fa-home fa-lg" aria-hidden="true"> </i></a> 
					</li> 

					<li>
						<a href="#nosotros" class= " zoom visible-xs visible-sm"><i class="fa fa-users fa-lg" aria-hidden="true"></i>&nbsp;¿Quiénes Somos?</a>
						<a href="#nosotros" class=" zoom hidden-xs hidden-sm">¿Quiénes Somos?</a>
			        </li>
					<li> 
						<a class=" zoom visible-xs visible-sm" href="#calidad"><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>&nbsp;Calidad</a>
						<a class=" zoom hidden-xs hidden-sm" href="#calidad">Calidad</a> 
					</li> 
					<li>  
						<a class=" zoom visible-xs visible-sm" href="#servicios"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> &nbsp;Servicios</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#servicios">Servicios</a> 
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#areatrabajo"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i>&nbsp;Áreas de Trabajo</a>
						<a class=" zoom hidden-xs hidden-sm" href="#areatrabajo">Áreas de Trabajo</a>  
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#galeria"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>&nbsp;Galería</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#galeria">Galería</a>
					</li> 
					<li > 
						<a class=" zoom visible-xs visible-sm" href="#contacto"><i class="fa fa-envelope-o  fa-lg" aria-hidden="true"></i>&nbsp;Contacto</a> 
						<a class=" zoom hidden-xs hidden-sm" href="#contacto">Contacto</a> 
					</li>
				</ul> 
			</div> 
		</div> 
	</nav>
	
	<div id="page-top" class="container-fluid full">
	</div>

	<div id="nosotros" class="container-fluid full">		
		<div class="container">
			<br>
			<br>
			<br>
			<div class="page-header text-center">
            	<h1>Reseña Histórica</h1>
        	</div>

<<<<<<< HEAD
			<div class="row">
				<div class="hidden-xs hidden-sm">
				    <ul class="nav nav-pills nav-stacked col-md-3">
						<li class="active">
					  		<a href="#resena" data-toggle="tab">Reseña Historica</a>
					  	</li>
					  	<li>				 
					  		<a href="#mision" data-toggle="tab">Mision</a>
					  	</li>
					  	<li> 				 
					  		<a href="#vision" data-toggle="tab">Vision</a>
					  	</li>
					</ul>
				</div>
				<div class="visible-xs visible-sm">
					<ul class="nav nav-tabs">
						<li class="active">
					  		<a href="#resena" data-toggle="tab">Reseña Historica</a>
					  	</li>
					  	<li>				 
					  		<a href="#mision" data-toggle="tab">Mision</a>
					  	</li>
					  	<li> 				 
					  		<a href="#vision" data-toggle="tab">Vision</a>
					  	</li>
					</ul>
				</div>
				<div id="tab_nosotros" class="tab-content col-md-9">
					<div class="tab-pane fade active in" id="resena">
					    <?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['historia']; ?></p>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="mision">
						<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['mision']; ?></p>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="vision">
						<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
							<p><?php echo $informacion['vision']; ?></p>
						<?php } ?>
					</div>
				</div>				
=======
		<div class="visible-xs">
			<ul class="nav nav-tabs center-block">
			  <li class="active"><a href="#resena" data-toggle="tab">Reseña Historica</a></li>
			  <li>				 <a href="#mision" data-toggle="tab">Mision</a></li>
			  <li> 				 <a href="#vision" data-toggle="tab">Vision</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade active in" id="resena">
			  	<br />
				<?php foreach(buscar_informacion_empresa() as $informacion){ ?>
				<p> <?php echo $informacion['historia']; ?></p>
				<?php } ?> 
			  </div>
			  <div class="tab-pane fade" id="mision">
			    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
			  </div>
			  <div class="tab-pane fade" id="vision">
			    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
			  </div>
>>>>>>> origin/master
			</div>
		</div>
	</div>
	<div id="calidad" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Calidad</h1>
        </div>

		<h1>Calidad</h1>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="servicios" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Servicios</h1>
        </div>
		
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="areatrabajo" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Áreas de Trabajo</h1>
        </div>
		
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>
	<div id="galeria" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Galería</h1>
        </div>
	
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
		<p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>	
	</div>

	<div id="contacto" class="container-fluid full">
		<div class="page-header text-center">
           	<h1>Contacto</h1>
        </div>
		
		<a href="mailto:tudireccion@email.com"> mgtopografia@mgtopografia.cl </a>
		

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="col-xs-12">
						<i class="fa fa-user fa-5x" aria-hidden="true"></i>
						<label>Nombre:&nbsp;</label>
						<label>Miguel Gonzalez Sanhueza</label>
					</div>
					<div class="col-md-12">
						<i class="fa fa-phone fa-5x" aria-hidden="true"></i>
						<label for=""> Celular: &nbsp;</label>
						<label for="">+56975479576</label>
					</div>					
					<div class="col-md-12">
						<i class="fa fa-envelope fa-5x hidden-xs" aria-hidden="true"></i>
						<i class="fa fa-envelope fa-3x visible-xs" aria-hidden="true"></i>
						<label for="">Correo: &nbsp;</label>
						<label for="">mgonzalez@mgtopogria.cl</label>
					</div>	
				</div>
				<div class="col-md-6">
					<form class="form-horizontal" role="form">
						<div class="form-group">
					        <label class="control-label col-xs-3">Nombre:</label>
					        <div class="col-xs-9">
					            <input type="text" class="form-control" placeholder="Nombre">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-xs-3" >Telefono:</label>
					        <div class="col-xs-9">
					            <input type="tel" class="form-control" placeholder="Telefono">
					        </div>
					    </div>
						<div class="form-group">
						    <label class="control-label col-xs-3">Email:</label>
						  	<div class="col-xs-9">
						        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					        </div>
					    </div>
					    <div class="form-group">
						    <label class="control-label col-xs-3">Mensaje:</label>
						  	<div class="col-xs-9">
						        <textarea type="text" class="form-control" id="inputMensaje" placeholder="Mensaje"></textarea>
					        </div>
					    </div>			    
				    	<br>
					    <div class="form-group">
					        <div class="col-xs-offset-3 col-xs-9">
					            <input type="submit" class="btn btn-primary" value="Enviar">
					            <input type="reset" class="btn btn-default" value="Limpiar">
					        </div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>

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

	<script src="../cliente/js/classie.js"></script>
    <script src="../cliente/js/cbpAnimatedHeader.js"></script>
</body>
</html>