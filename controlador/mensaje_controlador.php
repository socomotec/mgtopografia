<?php

function buscar_mensaje($estado){

		$modelo_mensaje = new mensaje_modelo();

		$datos = $modelo_mensaje->buscar_mensaje($estado);
		
		return $datos;

	}
?>