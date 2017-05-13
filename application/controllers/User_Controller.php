<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {
	function User_Controller() {
	parent::__construct();
	$this->load->library('session');
 	$this->load->model('User_Model');
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
 		if(!$this->uri->segment(2)){
 			header('Location: /user/'.$this->session->id);
 			exit();
 		}
		$data['title'] = "Профиль";

		$data['maindata'] = $this->User_Model->getData();
		
		if(isset($_GET['mess']) && $this->uri->segment(2) != $this->session->id) {
			$this->User_Model->newMess($_GET['mess']);
			header('Location: /im/'.$this->uri->segment(2));
			exit();
		}

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		$this->load->vars($data);
		$this->load->view('User_View');

	}
}