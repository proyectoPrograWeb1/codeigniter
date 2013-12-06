<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		
	}*/


	public function comprobar(){
		$usuario = array(
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password')
			);
		

		$this->load->model('usuario_model');
		if( $this->usuario_model->comprobar_usuario($usuario) == true){
			redirect('incial');		
		}else{
			redirect('usuarios');		
		}
	}

	public function index(){		
		$data['main_content'] = 'usuario_login';

		$this->load->view('main_template',$data);

	}		

	
}