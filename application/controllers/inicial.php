<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicial extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$user = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);

		$this->load->model('profesor_model');
		if ( $this->profesor_model->insertar_profesor($profesor) )
			redirect('profesores');	 
	}

	public function actualizar(){
		$user = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);
		$id = $this->input->post('id');

		$this->load->model('profesor_model');
		if( $this->profesor_model->actualiza_profesor($id, $profesor) )
			redirect('profesores');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('profesor_model');
		if( $this->profesor_model->eliminar_profesor($id) )
			redirect('profesores');
	}

	public function index(){		
		$data['main_content'] = 'inicio_inicial';

		//Llama los datos de los estudiantes
		$this->load->model('estudiante_model');
		$data['estudiantes'] = $this->estudiante_model->leer_estudiante();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['estudiante_actualizar']	= $this->estudiante_model->traer_estudiante($id);
		}
		//Llama los datos de los profesosres
		$this->load->model('profesor_model');
		$data['profesores'] = $this->profesor_model->leer_profesor();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['profesor_actualizar']	= $this->profesor_model->traer_profesor($id);
		}

		$this->load->view('main_template',$data);

	}		

}