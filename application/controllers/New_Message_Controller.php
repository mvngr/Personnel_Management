<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_Message_Controller extends CI_Controller {
	function New_Message_Controller() {
		parent::__construct();

		$this->load->library('session');
		
	 	$this->load->model('New_Message_Model');
	 	if(empty($_GET)) {
	 		$this->load->helper('url');
	 		header('Location: /im/new?find=' );
	 		exit();
	 	}
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}

 		$data['title'] = 'Новое сообщение';
 		$data['my_id'] = $this->session->id;
 		$data['users_exists'] = $this->New_Message_Model->getUsersInExistConv();
 		$data['show_me'] = $this->New_Message_Model->getAllInGroup();

 		if(isset($_GET['find']) && $_GET['find'] != '')
 			$data['find_show_me'] = $this->New_Message_Model->findInAllUsers($_GET['find']);
 		else
 			$data['find_show_me'] = false;

 		if(array_key_exists('user', $_GET))
 			$data['show_inp_line'] = true;
 		else
 			$data['show_inp_line'] = false;

 		if(isset($_GET['send']) && $_GET['user'] != '' && $_GET['message'] != '') {
 			$this->New_Message_Model->newMess($_GET['message'], $_GET['user']);
 			header('Location: /im/'.$_GET['user']);
 		}
 		
 		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		$this->load->vars($data);

		$this->load->view('New_Message_View');
	}
}