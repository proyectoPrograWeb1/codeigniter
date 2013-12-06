<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$grupo = array(
			'course_id' => $this->input->post('course_id'),
			'quarter' => $this->input->post('quarter'),
			'professor_id' => $this->input->post('professor_id'),
			'group_number' => $this->input->post('group_number'),
			'enabled' => $this->input->post('enabled')
			);

		$this->load->model('grupo_model');
		if ( $this->grupo_model->insertar_grupo($grupo) ){
			redirect('grupos');	 
		}
	}

	public function actualizar(){
		$grupo = array(
			'course_id' => $this->input->post('course_id'),
			'quarter' => $this->input->post('quarter'),
			'professor_id' => $this->input->post('professor_id'),
			'group_number' => $this->input->post('group_number'),
			'enabled' => $this->input->post('enabled')
			);
		$id = $this->input->post('id');

		$this->load->model('grupo_model');
		if( $this->grupo_model->actualiza_grupo($id, $grupo) ){
			redirect('grupos');		
		}
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('grupo_model');
		if( $this->grupo_model->eliminar_grupo($id) ){
			redirect('grupos');
		}
	}

	public function index(){		
		$data['main_content'] = 'inicio_grupo';

		$this->load->model('grupo_model');
		$data['grupos'] = $this->grupo_model->leer_grupo();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['grupo_actualizar']	= $this->grupo_model->traer_grupo($id);
		}

		$this->load->view('main_template',$data);
	}		

}