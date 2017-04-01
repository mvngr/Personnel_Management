<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {
	function User_Controller() {
	parent::__construct();
	$this->load->library('session');
 	$this->load->model('user_model');
	}

	function index(){
		$data['title'] = "Профиль";

		$data['maindata'] = $this->user_model->getData();
		$data['rkey'] = '';

		if(isset($_GET['btn'])) {
			$this->load->model('registration_model');
			$this->load->helper('url');
			$data['rkey'] = site_url('/registration/'.$this->registration_model->addNewKey($this->session->id).'/');
			unset($_GET);
		}

		$this->load->vars($data);
		$this->load->view('user_view');

	}
}