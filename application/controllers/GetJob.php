<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetJob extends CI_Controller {
	function GetJob() {
	parent::__construct();

	$this->load->library('session');

 	$this->load->model('GetJobM');
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		$data['title'] = "Работа";

		$data['maindata'] = $this->GetJobM->getInTable();
		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		$this->load->vars($data);
		$this->load->view('DefaultView');

	}
}