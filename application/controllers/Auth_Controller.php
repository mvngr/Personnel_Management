<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {
	function Auth_Controller() {
	parent::__construct();
 	$this->load->model('auth_model');

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
				if(!$this->auth_model->login($_POST['login'], $_POST['pass'])) {
					$data['info'] = 'Неверные данные';
				}
				else
					header('Location: /');
					
			$this->load->vars($data);
			$this->load->view('auth_view');
		}
		else {
			$this->load->view('logout');
		}
	}
}