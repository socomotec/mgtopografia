<?php


public function buscar_imagenes(){
  
  $modelo_imagen = new imagen_modelo();
  
  $datos = $modelo_imagen->buscar_imagenes_empresa();
  
  return $datos;
  
  }
public function subir_imagen($nombre, $ruta, $descripcion){
  
  $modelo_imagen = new imagen_modelo();
  
  $datos = $modelo_imagen->subir_imagen_empresa($nombre, $ruta, $descripcion);
  
  }

public function editar_imagen($id, $nombre, $ruta, $descripcion){
  
  $modelo_imagen = new imagen_modelo();
  
  $datos = $modelo_imagen->editar_imagen_empresa($id, $nombre, $ruta, $descripcion);
  
  }

public function eliminar_imagen($id){
  
  $modelo_imagen = new imagen_modelo();
  
  $datos = $modelo_imagen->eliminar_imagen_empresa($id);
  
  }
?>