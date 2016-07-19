<?php


function editar_historia($historia, $id){

	$modelo_empresa = new empresa_modelo();

	$datos = $modelo_empresa->editar_historia($historia, $id);

}

function editar_mision($mision, $id){

	$modelo_empresa = new empresa_modelo();

	$datos = $modelo_empresa->editar_mision($mision, $id);

}

function editar_vision($vision, $id){

	$modelo_empresa = new empresa_modelo();

	$datos = $modelo_empresa->editar_vision($vision, $id);

}


function buscar_informacion(){

	$modelo_empresa = new empresa_modelo();

	$datos = $modelo_empresa->buscar_informacion_empresa();
	
	return $datos;
}

?>