<?php
class empresa_modelo{

	private $db;
	private $informacion_empresa;


	public function __construct(){

		$this->db=Conectar::Conexion(); //Establece la Conexion con la BD
		
		$this->informacion_empresa=array();
		 
	}

	public function editar_historia($historia, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET historia = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $historia, $id);
				
		$consulta->execute();
	}

	public function editar_mision($mision, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET mision = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $mision, $id);
				
		$consulta->execute();
	}

	public function editar_vision($vision, $id){ // Crea la imagen en la base de datos

		$consulta=$this->db->prepare("UPDATE empresa SET vision = ? WHERE id = ? ");
				
		$consulta->bind_param('si', $vision, $id);
				
		$consulta->execute();
	}

	public function buscar_informacion_empresa(){

		$consulta=$this->db->query("SELECT * FROM empresa");
			
			while($filas=$consulta->fetch_assoc()){
				
				$this->informacion_empresa[]=$filas;
				
			}

		return $this->informacion_empresa;
	}

	
}

?>