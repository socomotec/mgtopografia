<?php
class mensaje_modelo{

	private $db;
	private $mensaje;


	public function __construct(){

		$this->db=Conectar::Conexion(); //Establece la Conexion con la BD
		
		$this->mensaje=array();
		 
	}

	public function buscar_mensaje($estado){


		$consulta=$this->db->prepare("SELECT * FROM empresa WHERE estado = ?");
				
		$consulta->bind_param('i', $estado);
				
		$consulta->execute();

		while($filas = $consulta->fetch_assoc()){
				
			$this->mensaje[]=$filas;
				
		}

		return $this->mensaje;
	
	}
	
}