<?php 

require_once("../../conexion/bd.php");
require_once("../../modelo/empresa_modelo.php");
require_once("../../controlador/empresa_controlador.php");

foreach(buscar_informacion() as $informacion){

	echo $informacion['historia']; 
	echo $informacion['mision'];
	echo $informacion['vision'];

}
//Para cada pagina tienes que hacer este procedimiento.

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
	<script src="../js/jquery-1.11.js"></script>

	<link rel="stylesheet" type="text/css" href="../fullpage/css/jquery.fullPage.css" />
	<script src="../fullpage/js/jquery.easings.min.js"></script>
	<script type="text/javascript" src="../fullpage/js/scrolloverflow.min.js"></script>
	<script type="text/javascript" src="../fullpage/js/jquery.fullPage.js"></script>

	<title>MGTOPOGRAFIA</title>

</head>
<body>
	<div class="container">
		<h1>hola gay del edu</h1>
	</div>
</body>
</html>