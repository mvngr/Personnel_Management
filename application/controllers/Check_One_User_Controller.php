<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_One_User_Controller extends CI_Controller {


	function Check_One_User_Controller() {
		parent::__construct();
		$this->load->library('session');
		
	 	$this->load->model('Check_One_User_Model');

	}

	function index() {
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		$data['title'] = "Проверить работника";

		$data['left'] = $this->Check_One_User_Model->getSimpleInfo();
		$data['right'] = $this->Check_One_User_Model->getMyOrdersInfo();
		$data['user'] = $this->Check_One_User_Model->queryUser();

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		$this->load->vars($data);
		$this->load->view('Check_One_User_View');

	}
}