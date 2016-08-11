<?php

class imagen_modelo{
  
  	private $db;
  	private $imagenes;
  
  public function _construct(){
    
    $this->db=Conectar::Conexion();
    $this->imagenes=array();
    
  }
  
  public function subir_imagen_empresa($nombre, $ruta, $descripcion){ 
    
    $consulta=$this->db->prepare("INSERT INTO imagen (nombre, ruta, descripcion) VALUES (?, ?, ?)");
    
    $consulta->bind_param("sss", $nombre, $ruta, $descripcion);
    
    $consulta->execute();  
    
  }
  
  public function eliminar_imagen_empresa($id){
    
    $consulta->$this->db->prepare("DELETE imagen where id = ?");
    
    $consulta->bind_param("i", $id);
    
    $consulta->execute();
    
  }
  
  public function buscar_imagenes_empresa(){
    
    $consulta->$this->db->query("SELECT * FROM imagen");
    
    while($filas=$consulta->fetch_assoc()){
      
      $this->imagenes[]=$filas;
      
    }
    
    return $this->imagenes;
}
  
  
  public function editar_imagen_empresa($id, $nombre, $ruta, $descripcion){
    
    $consulta->$this->db->prepare("UPDATE imagen SET nombre = ?, ruta = ?, descripcion = ? WHERE id = ?");
    
    $consulta->bind_param("sssi", $nombre, $ruta, $descripcion, $id);
    
    $consulta->execute();
    
  }
 
}