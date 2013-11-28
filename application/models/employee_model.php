<?php

class Employee_model extends CI_Model {
	
	function get_employees() {
		//$query = $this->db->get('employee');
		$this->db
			->select()
			->from('employee')
			->order_by('first_name');
		$query = $this->db->get();
		return $query->result_array();
		//return $query->result();
	}

	function insert_employee($employee){
		$this->db->insert('employee', $employee);
		return $this->db->insert_id();
	}

	function update_employee($employee_id, $employee) {
		$this->db->where('id',$employee_id);
		$this->db->update('employee', $employee);
	}

	function delete_employee($id) {
		$this->db->where('id', $id);
		$this->db->delete('employee');
	}

}