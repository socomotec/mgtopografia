<?php 
require_once("../conexion/bd.php");
require_once("../controlador/empresa_controlador.php");
?>

<html>
	<head>

		<title>MGTOPOGRAFIA</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      	<meta name="HandheldFriendly" content="true" />
      	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
		<script src="js/jquery-1.11.js"></script>
      	<script type="text/javascript">

      		$(document).ready(function(){

      			$("#editar").click(function(){

      				$("#historia").removeAttr("readonly");

      			});
      			

      		});

      	</script>

	</head>
	<body>

		<div class="container">

			<?php foreach(buscar_informacion() as $informacion){ ?>
				<div class="row">
					
				<h3> Reseña Histórica </h3>
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
							<textarea id="historia" class="form-control" rows="3" style="resize:none;" readonly><?php echo $informacion['historia']; ?></textarea>
						</div>
					</div>

					<div class="row">

						<div class="text-center">

						<button id="editar" class="btn btn-warning"> Editar </button>
						<button id="guardar" class="btn btn-primary"> Guardar </button>
						</div> 
					</div>

				</div>

			<?php } ?>
			


		</div> <!-- Cierre del container -->
	</body>
</html>