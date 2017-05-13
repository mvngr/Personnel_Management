<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One_News_Controller extends CI_Controller {
	function One_News_Controller() {
		parent::__construct();

		$this->load->library('session');
		$this->load->model('One_News_Model');
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

		$this->load->view('One_News_View');
	}
}