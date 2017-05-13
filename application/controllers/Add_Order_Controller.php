<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Order_Controller extends CI_Controller {
	function Add_Order_Controller() {
		parent::__construct();

		$this->load->library('session');
		
	 	$this->load->model('Add_Order_Model');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}

		

		#$data['maindata'] = $this->getjobm->getInTable();

		

		if(isset($_GET))
		{
			$data = $this->Add_Order_Model->checkRules();
			
		}

		$data['select'] = $this->Add_Order_Model->getGroupsList();

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();
 		
		$this->load->vars($data);

		$this->load->view('Add_Order_View');
	}
}