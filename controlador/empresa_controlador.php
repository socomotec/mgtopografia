<?php

	// Historia de la Empresa.

	function editar_historia($historia, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_historia($historia, $id);

	}

	//Misión de la Empresa.

	function editar_mision($mision, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_mision($mision, $id);

	}

	//Visión de la Empresa.

	function editar_vision($vision, $id){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->editar_vision($vision, $id);

	}

	//Buscar información de la empresa.

	function buscar_informacion_empresa(){

		$modelo_empresa = new empresa_modelo();

		$datos = $modelo_empresa->buscar_informacion_empresa();
		
		return $datos;
	}

	// Galeria de Imagenes

	function buscar_galeria_imagenes(){

		$modelo_empresa = new empresa_modeo();

		$datos = $modelo_empresa->buscar_imagen_galeria();

		return $datos;
	}


	



?>