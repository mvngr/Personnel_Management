<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Controller extends CI_Controller {
	function Welcome_Controller() {
	parent::__construct();
		$this->load->library('session');
	}

	function index(){

		header('Location: /check');

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

 		$this->load->vars($data);
		$this->load->view('Welcome_View');

	}
}