<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
	{
		$this->load->view('show_clients');
	}
}