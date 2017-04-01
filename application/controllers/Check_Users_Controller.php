<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_Users_Controller extends CI_Controller {
	function Check_Users_Controller() {
		parent::__construct();
		$this->load->library('session');
	 	$this->load->model('check_users_model');
	}

	function index(){
		$data['title'] = "Проверить работников";

		#$data['maindata'] = $this->getjobm->getInTable();

		$this->load->vars($data);
		$this->load->view('defaultview');

	}
}