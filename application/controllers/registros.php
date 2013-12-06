<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registros extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$usuario = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);

		$this->load->model('registro_model');
		if ( $this->registro_model->insertar_usuario($usuario) ){
			redirect('registros');	 
		}
	}

	public function actualizar(){
		$usuario = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);
		$id = $this->input->post('id');

		$this->load->model('registro_model');
		if( $this->registro_model->actualiza_usuario($id, $usuario) ){
			redirect('registros');		
		}
	}


	public function index(){		
		$data['main_content'] = 'inicio_registro';

		$this->load->view('main_template',$data);
	}		

}