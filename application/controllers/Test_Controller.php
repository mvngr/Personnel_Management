<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_Controller extends CI_Controller {
	function Test_Controller() {
		parent::__construct();

		$this->load->library('session');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}


		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();
 		
		$this->load->vars($data);

		$this->load->view('Test_View');
	}
}