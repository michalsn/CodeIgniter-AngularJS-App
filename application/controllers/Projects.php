<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
		$this->load->view('layout');
	}

	public function template_list()
	{
		$this->load->view('list');
	}

	public function template_detail()
	{
		$this->load->view('detail');
	}

}

/* End of file Projects.php */
/* Location: ./application/controllers/Projects.php */