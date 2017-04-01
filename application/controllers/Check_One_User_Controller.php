<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_One_User_Controller extends CI_Controller {


	function Check_One_User_Controller() {
		parent::__construct();
		$this->load->library('session');
		
	 	$this->load->model('check_one_user_model');

	}

	function index() {
		$data['title'] = "Проверить работника";

		$data['maindata'] = $this->check_one_user_model->getSimpleInfo();

		$this->load->vars($data);
		$this->load->view('defaultview');

	}
}