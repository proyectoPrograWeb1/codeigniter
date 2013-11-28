<?php

class Student_model extends CI_Model {
	
	function get_student() {
		//$query = $this->db->get('employee');
		$this->db
			->select()
			->from('student')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		//return $query->result();
	}

	function insert_student($student){
		$this->db->insert('student', $student);
		return $this->db->insert_id();
	}

	function update_student($student_id, $student) {
		$this->db->where('id',$student_id);
		$this->db->update('student', $student);
	}

	function delete_student($id) {
		$this->db->where('id', $id);
		$this->db->delete('student');
	}

}