<?php 

public function buscar_conacto(){
  
  $modelo_contacto = new contacto_modelo();
  
  $datos = $modelo_contacto->buscar_informacion_contacto();
  
  return $datos;
  
  }

public function editar_contacto($id, $nombre, $celular, $email){
  
  $modelo_contacto = new contacto_modelo();
  
  $datos = $modelo_contacto->editar_informacion_contacto($id, $nombre, $celular, $email);
  
  }