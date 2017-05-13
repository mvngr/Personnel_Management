<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_News_Controller extends CI_Controller {
	function Add_News_Controller() {
		parent::__construct();

		$this->load->library('session');
		$this->load->model('Add_News_Model');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}


 		$data['select'] = $this->Add_News_Model->getGroupsList();

 		if(isset($_GET['note'])) {
 			header('Location: /news/'.$this->Add_News_Model->send());
 			exit();
 		}

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();
 		
		$this->load->vars($data);

		$this->load->view('Add_News_View');
	}
}