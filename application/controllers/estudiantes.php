<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiantes extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$estudiante = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);

		$this->load->model('estudiante_model');
		if ( $this->estudiante_model->insertar_estudiante($estudiante) ){
			redirect('estudiantes');	 
		}
	}

	public function actualizar(){
		$estudiante = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);
		$id = $this->input->post('id');

		$this->load->model('estudiante_model');
		if( $this->estudiante_model->actualiza_estudiante($id, $estudiante) ){
			redirect('estudiantes');		
		}
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('estudiante_model');
		if( $this->estudiante_model->eliminar_estudiante($id) ){
			redirect('estudiantes');
		}
	}

	public function index(){		
		$data['main_content'] = 'inicio_estudiante';

		$this->load->model('estudiante_model');
		$data['estudiantes'] = $this->estudiante_model->leer_estudiante();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['estudiante_actualizar']	= $this->estudiante_model->traer_estudiante($id);
		}

		$this->load->view('main_template',$data);
	}		

}