<?php 
require_once("../conexion/bd.php");
require_once("../controlador/empresa_controlador.php");
?>
<html>
	<head>
		<title>MGTOPOGRAFIA</title>
	</head>
	<body>

		<div class="container">

			<?php foreach(buscar_informacion() as $informacion){ ?>

				<textarea> <?php echo $informacion['historia']; ?> </textarea>

			<?php } ?>

		</div> <!-- Cierre del container -->
	</body>
</html>