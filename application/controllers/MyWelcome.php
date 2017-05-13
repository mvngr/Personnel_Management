<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyWelcome extends CI_Controller {

	public function index() {
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		$this->load->library('session');
		$this->load->view('My_Welcome_Message');
	}

}