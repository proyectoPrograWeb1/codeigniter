<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aulas extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$aula = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),
			'id_courso' => $this->input->post('id_courso')
			);

		$this->load->model('aula_model');
		if ( $this->aula_model->insertar_aula($aula) ){
			redirect('aulas');	 
		}
	}

	public function actualizar(){
		$aula = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'location' => $this->input->post('location'),
			'id_courso' => $this->input->post('id_courso')
			);
		$id = $this->input->post('id');

		$this->load->model('aula_model');
		if( $this->aula_model->actualiza_aula($id, $aula) ){
			redirect('aulas');		
		}
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('aula_model');
		if( $this->aula_model->eliminar_aula($id) ){
			redirect('aulas');
		}
	}

	public function index(){		
		$data['main_content'] = 'inicio_aula';

		$this->load->model('aula_model');
		$data['aulas'] = $this->aula_model->leer_aula();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['aula_actualizar']	= $this->aula_model->traer_aula($id);
		}

		$this->load->view('main_template',$data);
	}		

}