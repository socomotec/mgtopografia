<?php 
	require_once("../../conexion/bd.php");
	require_once("../../controlador/empresa_controlador.php");
	require_once("../../modelo/empresa_modelo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reseña Histórica</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link type="text/css" rel="stylesheet" href="../css/estilo.css" />
    <link type="text/css" rel="stylesheet" href="../animate/animate.css" /> 
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  media="screen,projection" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script src="../js/jquery-1.11.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-iframe hidden-xs hidden-sm"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3> Información de contacto </h3>
				<hr />
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
				<h5> Nombre: </h5>
			</div>
			<div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
				<input class="form-control" type="text" value="Miguel Gonzalez Sanhueza" />
			</div>

		</div>
		<div class="row">
			<br />
			<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
				<h5> Celular: </h5>
			</div>
			<div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
				<input class="form-control" type="text" value="+569975479576" />
			</div>
		</div>

		<div class="row">
			<br />
			<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
				<h5> Email: </h5>
			</div>
			<div class="col-xs-10 col-sm-5 col-md-4 col-lg-4">
				<input class="form-control" type="text" value="mgonzalez@mgtopografia.cl" />
			</div>
		</div>

		<div class="row">
			<br />
			<br />
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3> Mensajes de contacto </h3>
				<hr />
				<br />
			</div>
		</div>

		<div class="row">
  			<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#bandeja_entrada" aria-controls="Bandeja_entrada" role="tab" data-toggle="tab">Bandeja de Entrada</a></li>
			    <li role="presentation"><a href="#revisados" aria-controls="profile" role="tab" data-toggle="tab">Revisados</a></li>
			    
			 </ul>


    		<div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="bandeja_entrada">
			    	<br />
			    	<table class="table table-hover">
  						<thead>
  							<th>Nombre</th>
  							<th>Celular</th>
  							<th class="hidden-xs hidden-sm">Correo</th>
  							<th>Acciones</th>
  						</thead>
  						<tbody>
  							<tr>
  								<td> Sebastián Salas </td>
  								<td> 975479576 </td>
  								<td class="hidden-xs hidden-sm"> ssalas@socomtec.cl </td>
  								<td> 
  									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  										<i class="fa fa-comment" aria-hidden="true"></i>
  									</div>
  									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  										<i class="fa fa-check" aria-hidden="true"></i>
  									</div>
  									<div>
										<i class="fa fa-trash" aria-hidden="true"></i>
									</div>
								</td>

  							</tr>

  							<tr>
  								<td> Misael Arroyo</td>
  								<td> 975479576 </td>
  								<td class="hidden-xs hidden-sm"> marroyo@socomtec.cl </td>
  								<td> 
  									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  										<i class="fa fa-comment" aria-hidden="true"></i>
  									</div>
  									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  										<i class="fa fa-check" aria-hidden="true"></i>
  									</div>
  									<div>
										<i class="fa fa-trash" aria-hidden="true"></i>
									</div>
								</td>

  							</tr>
  						</tbody>
  						<tfoot>
  							
  						</tfoot>
					</table>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="revisados">Hola</div>
			    
  			</div>

		</div>


	</div> <!-- Cierre de Container -->
	
</body>
</html>