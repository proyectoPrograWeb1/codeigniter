<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicial extends CI_Controller{	


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
			'state' => $this->input->post('state'),
			'is_admin' => $this->input->post('is_admin'),
			'email' => $this->input->post('email')
			);

		$this->load->model('registro_model');
		if ( $this->registro_model->insertar_usuario($usuario) )
			redirect('inicial');	 
	}

	public function actualizar(){
		$usuario = array(
			'first_name' => $this->input->post('first_name'),
			'username' => $this->input->post('username'),
			'last_name' => $this->input->post('last_name'),
			'document_number' => $this->input->post('document_number'),
			'state' => $this->input->post('state'),
			'is_admin' => $this->input->post('is_admin'),
			'email' => $this->input->post('email')
			);
		$id = $this->input->post('id');

		$this->load->model('registro_model');
		if( $this->registro_model->actualiza_usuario($id, $usuario) )
			redirect('inicial');		
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('registro_model');
		if( $this->registro_model->eliminar_usuario($id) )
			redirect('inicial');
	}

	public function index(){		
		$data['main_content'] = 'inicio_inicial';

		//Llama los datos de los usuarios registrados
		$this->load->model('registro_model');
		$data['inicial'] = $this->registro_model->leer_usuario();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['usuario_actualizar']	= $this->registro_model->traer_usuario($id);
		}
		
		$this->load->view('main_template',$data);

	}		

}