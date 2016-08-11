<?php

class contacto_modelo{
  
  	private $db;
  	private $informacion;
  
  public function _construct(){
    
    $this->db=Conectar::Conexion();
    $this->informacion=array();
    
  }
  
  public function buscar_informacion_contacto(){
    
    $consulta->$this->db->query("SELECT * FROM contacto");
    
    while($filas=$consulta->fetch_assoc()){
      
      $this->informacion[]=$filas;
      
    }
    
    return $this->informacion;
}
  
  
  public function editar_informacion_contacto($id, $nombre, $celular, $email){
    
    $consulta->$this->db->prepare("UPDATE contacto SET nombre = ?, celular = ?, email = ? WHERE id = ?");
    
    $consulta->bind_param("sisi", $nombre, $celular, $email, $id);
    
    $consulta->execute();
    
  }
 
}