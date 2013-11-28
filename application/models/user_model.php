<?php

class User_model extends CI_Model {
	
	function get_user() {
		//$query = $this->db->get('employee');
		$this->db
			->select()
			->from('user')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		//return $query->result();
	}

	function insert_user($user){
		$this->db->insert('user', $user);
		return $this->db->insert_id();
	}

	function update_student($student_id, $student) {
		$this->db->where('id','id');
		$this->db->update('student', $student);
	}

	function delete_student($id) {
		$this->db->where('id', $id);
		$this->db->delete('student');
	}

}