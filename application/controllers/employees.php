<?php

class Employees extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('employee_model');
	}

	function index() {
		$data['employees'] = $this->employee_model->get_employees();
		//echo "<pre>";print_r($data);echo"</pre>";
		$this->load->view('employee_index', $data);
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
				'genre' => $_POST['genre'],
				'notify' => $_POST['notify']
			);
			//echo "<pre>";print_r($data);echo"</pre>";
			$this->employee_model->insert_employee($data);
			redirect(base_url().'employees/');
		} else {
			$this->load->view('employee_create');
		}
	}


}