<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetJob extends CI_Controller {
	function GetJob() {
	parent::__construct();
 	$this->load->model('getjobm');
	}

	function index(){
		$data['title'] = "Работа";

		$data['maindata'] = $this->getjobm->getInTable();

		$this->load->vars($data);
		$this->load->view('defaultview');

	}
}