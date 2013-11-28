<?php

class Students extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('student_model');
	}

	function index() {
		$data['student'] = $this->student_model->get_student();
		//echo "<pre>";print_r($data);echo"</pre>";
		$this->load->view('student_index', $data);
	}


	// function employee($employeeId) {
	// 	$data['employee'] = $this->employee_model->get_employees($employeeId);
	// 	$this->load->view('employee_show', $data);
	// }

	function insert() {

		if($_POST) {
			$data = array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'username' => $_POST['username'],
				'document_number' => $_POST['document_number'],
				'email' => $_POST['email']
			);
			//echo "<pre>";print_r($data);echo"</pre>";
			$this->student_model->insert_student($data);
			redirect(base_url().'students/');
		} else {
			$this->load->view('student_create');
		}
	}

	function update($id) {

		if($_POST) {
			$data = array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'username' => $_POST['username'],
				'document_number' => $_POST['document_number'],
				'email' => $_POST['email']
			);
			//echo "<pre>";print_r($data);echo"</pre>";
			$this->student_model->update_student($id, $data);
			redirect(base_url().'students/');
		} else {
			$this->load->view('student_');
		}
	}

	function delete($id)
	{
		// delete person
		$this->student_model->delete_student($id);
		
		// redirect to person list page
		$this->load->view('student_dalete');
	}

}