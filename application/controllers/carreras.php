<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carreras extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		//$this->
	}*/

	public function insertar(){

		$carrera = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'id_courso' => $this->input->post('id_courso')
			);

		$this->load->model('carrera_model');
		if ( $this->carrera_model->insertar_carrera($carrera) ){
			redirect('carreras');	 
		}
	}

	public function actualizar(){
		$carrera = array(
			'code' => $this->input->post('code'),
			'name' => $this->input->post('name'),
			'id_courso' => $this->input->post('id_courso')
			);
		$id = $this->input->post('id');

		$this->load->model('carrera_model');
		if( $this->carrera_model->actualiza_carrera($id, $carrera) ){
			redirect('carreras');		
		}
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->load->model('carrera_model');
		if( $this->carrera_model->eliminar_carrera($id) ){
			redirect('carreras');
		}
	}

	public function index(){		
		$data['main_content'] = 'inicio_carrera';

		$this->load->model('carrera_model');
		$data['carreras'] = $this->carrera_model->leer_carrera();		

		if( $this->uri->segment(3) != '' ){
			$id = $this->uri->segment(3);			
			$data['carrera_actualizar']	= $this->carrera_model->traer_carrera($id);
		}

		$this->load->view('main_template',$data);
	}		

}