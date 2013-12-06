<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrera_model extends CI_Model{

	public function insertar_carrera($carrera){
		//Validación para saber si inserta carrera o no
		if ( $this->db->insert('career', $carrera) ){
			return true; //Devuelve true		
		}
		else{
			return false; //Devuelve true
		}

	}

	public function leer_carrera(){

		$this->db->order_by('id ASC'); //Ordena en forma asendente

		$query = $this->db->get('career');

		return $query->result();
	}

	public function traer_carrera($id){

		$this->db->where('id', $id);

		$query = $this->db->get('career');

		return $query->row();
	}

	public function actualiza_carrera($id, $carrera){

		$this->db->where('id', $id);

		if( $this->db->update('career', $carrera) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_carrera($id){

		$this->db->where('id', $id);

		if( $this->db->delete('career') )
			return true;		
		else
			return false;		
		
	}

}