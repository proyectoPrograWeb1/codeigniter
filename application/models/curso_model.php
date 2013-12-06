<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curso_model extends CI_Model{

	public function insertar_curso($curso){

		if ( $this->db->insert('course', $curso) )
			return true;		
		else
			return false;

	}

	public function leer_curso(){

		$this->db->order_by('id ASC');

		$query = $this->db->get('course');

		return $query->result();
	}

	public function traer_curso($id){

		$this->db->where('id', $id);

		$query = $this->db->get('course');

		return $query->row();
	}

	public function actualiza_curso($id, $curso){

		$this->db->where('id', $id);

		if( $this->db->update('course', $curso) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_curso($id){

		$this->db->where('id', $id);

		if( $this->db->delete('course') )
			return true;		
		else
			return false;		
		
	}

}