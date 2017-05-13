<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encrypt_Controller extends CI_Controller {
	function Encrypt_Controller() {
		parent::__construct();

		$this->load->library('session');
		
	 	$this->load->model('Encrypt_Model');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION) ){
 			header('Location: /login/');
 			exit();
 		}
 		if(!($this->session->id == 1 || $this->session->id == 9))
 			show_404();

		$data['title'] = "Закодировать базу данных";

		$data['data'] = $this->Encrypt_Model->code();

		

		$this->load->vars($data);

		$this->load->view('Encrypt_View');
	}
}