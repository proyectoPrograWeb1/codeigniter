<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula_model extends CI_Model{

	public function insertar_aula($aula){
		//Validación para saber si inserta aula o no
		if ( $this->db->insert('classroom', $aula) ){
			return true; //Devuelve true		
		}
		else{
			return false; //Devuelve true
		}

	}

	public function leer_aula(){

		$this->db->order_by('id ASC'); //Ordena en forma asendente

		$query = $this->db->get('classroom');

		return $query->result();
	}

	public function traer_aula($id){

		$this->db->where('id', $id);

		$query = $this->db->get('classroom');

		return $query->row();
	}

	public function actualiza_aula($id, $aula){

		$this->db->where('id', $id);

		if( $this->db->update('classroom', $aula) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_aula($id){

		$this->db->where('id', $id);

		if( $this->db->delete('classroom') )
			return true;		
		else
			return false;		
		
	}

}