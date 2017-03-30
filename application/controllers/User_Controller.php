<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {
	function User_Controller() {
	parent::__construct();
 	$this->load->model('user_model');
	}

	function index(){
		$data['title'] = "Профиль";

		$data['maindata'] = $this->user_model->getData();

		$this->load->vars($data);
		$this->load->view('user_view');

	}
}