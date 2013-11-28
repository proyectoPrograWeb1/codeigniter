<?php

class Users extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	function index() {
		$data['user'] = $this->user_model->get_user();
		//echo "<pre>";print_r($data);echo"</pre>";
		$this->load->view('user_index', $data);
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
				'password' => $_POST['password'],
				'document_number' => $_POST['document_number'],
				'email' => $_POST['email']
				'is_admin' => $_POST['is_admin']
			);
			//echo "<pre>";print_r($data);echo"</pre>";
			//if($_POST['puesto'] == "administrador")
			$this->student_model->insert_student($data);
			redirect(base_url().'users/');
		} else {
			$this->load->view('usuario_create');
		}
	}



}