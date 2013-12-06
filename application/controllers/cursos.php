<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$curso = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
			);

		$this->load->model('curso_model');
		if ( $this->curso_model->insertar_curso($curso) ){
			redirect('cursos');	 
		}	
	}

	public function actualizar(){
		$curso = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
			);
		$id = $this->input->post('id');

		$this->load->model('curso_model');
		if( $this->curso_model->actualiza_curso($id, $curso) ){
			redirect('cursos');		
		}
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('curso_model');
		if( $this->curso_model->eliminar_curso($id) ){
			redirect('cursos');
		}
	}

	public function index(){		
		$data['main_content'] = 'inicio_curso';

		$this->load->model('curso_model');
		$data['cursos'] = $this->curso_model->leer_curso();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['curso_actualizar']	= $this->curso_model->traer_curso($id);
		}

		$this->load->view('main_template',$data);
	}		

}