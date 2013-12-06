<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{


	public function comprobar_usuario($cedula, $pass)
   {
      $r = $this->db->query("SELECT * FROM user WHERE document_number = '$cedula' AND password='$pass' ");
      if ($r->num_rows() == 0){

         return false;

      }else{

         return true;
         
      }   
	}

	/*public function insertar_usuario($usuario){

		if ( $this->db->insert('user', $usuario) )
			return true;		
		else
			return false;

	}

	public function leer_usuario(){

		$this->db->order_by('id ASC');

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
		
	}*/

}