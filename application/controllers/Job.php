<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
	function Job() {
	parent::__construct();

	$this->load->library('session');
 	$this->load->model('jobm');
	}

	function index(){
		$data['title'] = "Работа";

		$data['maindata'] = $this->jobm->allinfo();

		$this->load->vars($data);
		$this->load->view('defaultview');

	}
}