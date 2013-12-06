<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupo_model extends CI_Model{

	public function insertar_grupo($grupo){
		//Validación para saber si inserta grupo o no
		if ( $this->db->insert('`group`', $grupo) ){
			return true; //Devuelve true		
		}
		else{
			return false; //Devuelve true
		}

	}

	public function leer_grupo(){

		$this->db->order_by('id ASC'); //Ordena en forma asendente

		$query = $this->db->get('`group`');

		return $query->result();
	}

	public function traer_grupo($id){

		$this->db->where('id', $id);

		$query = $this->db->get('`group`');

		return $query->row();
	}

	public function actualiza_grupo($id, $grupo){

		$this->db->where('id', $id);

		if( $this->db->update('`group`', $grupo) )
			return true;		
		else
			return false;
		
	}

	public function eliminar_grupo($id){

		$this->db->where('id', $id);

		if( $this->db->delete('`group`') )
			return true;		
		else
			return false;		
		
	}

}