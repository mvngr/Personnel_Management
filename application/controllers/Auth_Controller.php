<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {
	function Auth_Controller() {
	parent::__construct();
 	$this->load->model('Auth_Model');

 	if($this->uri->segment(2))
 			switch ($this->uri->segment(2)) {
 				case 'out':
 					$this->session->sess_destroy();

 					header('Location: /login/');
 					break;
 				
 				default:
 					# code...
 					break;
 			}
	}

	function index(){

		

		if(!array_key_exists('name', $_SESSION)) 
		{

			$data['title'] = "Войти";
			$data['info'] = '';

			if(isset($_POST['login'])) 
				if(!$this->Auth_Model->login($_POST['login'], $_POST['pass'])) {
					$data['info'] = 'Неверные данные';
				}
				else
					header('Location: /');
					
			$this->load->vars($data);
			$this->load->view('Auth_View');
		}
		else {
			#menu
	 		$this->load->model('Header_Model');
	 		$data['menu'] = $this->Header_Model->loadAll();

	 		$data['rkey'] = '';

	 		if(isset($_GET['btn']))
	 			if($this->session->id_post == 2) {
					$this->load->model('Registration_Model');
					$this->load->helper('url');
					$data['rkey'] = site_url('/registration/'.$this->Registration_Model->addNewKey($this->session->id).'/');
					$_GET['btn'] = 'created';
				}
			else
				$data['access'] = false;

	 		$this->load->vars($data);
			$this->load->view('LogOut');
		}
	}
}