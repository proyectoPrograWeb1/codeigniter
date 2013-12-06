<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiante_model extends CI_Model{

	public function insertar_estudiante($estudiante){
		//Validación para saber si inserta estudiante o no
		if ( $this->db->insert('student', $estudiante) ){
			return true; //Devuelve true		
		}
		else{
			return false; //Devuelve true
		}

	}

	public function leer_estudiante(){

		$this->db->order_by('id ASC'); //Ordena en forma asendente

		$query = $this->db->get('student');

		return $query->result();
	}

	public function traer_estudiante($id){

		$this->db->where('id', $id);

		$query = $this->db->get('student');

		return $query->row();
	}

	public function actualiza_estudiante($id, $estudiante){

		$this->db->where('id', $id);

		if( $this->db->update('student', $estudiante) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_estudiante($id){

		$this->db->where('id', $id);

		if( $this->db->delete('student') )
			return true;		
		else
			return false;		
		
	}

}