<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesor_model extends CI_Model{

	public function insertar_profesor($profesor){

		if ( $this->db->insert('professor', $profesor) )
			return true;		
		else
			return false;

	}

	public function leer_profesor(){

		$this->db->order_by('id ASC');

		$query = $this->db->get('professor');

		return $query->result();
	}

	public function traer_profesor($id){

		$this->db->where('id', $id);

		$query = $this->db->get('professor');

		return $query->row();
	}

	public function actualiza_profesor($id, $profesor){

		$this->db->where('id', $id);

		if( $this->db->update('professor', $profesor) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_profesor($id){

		$this->db->where('id', $id);

		if( $this->db->delete('professor') )
			return true;		
		else
			return false;		
		
	}

}