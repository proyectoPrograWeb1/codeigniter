<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro_model extends CI_Model{

	public function insertar_usuario($usuario){
		//Validación para saber si inserta usuario o no
		if ( $this->db->insert('user', $usuario) ){
			return true; //Devuelve true		
		}
		else{
			return false; //Devuelve true
		}

	}

	public function leer_usuario(){

		$this->db->order_by('id ASC'); //Ordena en forma asendente

		$query = $this->db->get('user');

		return $query->result();
	}

	public function traer_usuario($id){

		$this->db->where('id', $id);

		$query = $this->db->get('user');

		return $query->row();
	}

	public function actualiza_usuario($id, $usuario){

		$this->db->where('id', $id);

		if( $this->db->update('user', $usuario) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_usuario($id){

		$this->db->where('id', $id);

		if( $this->db->delete('user') )
			return true;		
		else
			return false;		
		
	}

}