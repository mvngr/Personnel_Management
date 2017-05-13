<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_Controller extends CI_Controller {
	function Message_Controller() {
		parent::__construct();

		$this->load->library('session');
		
	 	$this->load->model('Message_Model');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}

 		$data['title'] = 'Сообщения';
 		$data['my_id'] = $this->session->id;
 		if($this->uri->segment(2)) {
	 		$data['exist_mess'] = 1;
	 		$data['mess'] = $this->Message_Model->getLimitMess();
 		}
 		else {
 			$data['exist_mess'] = 0;
 			$data['mess'] = Array();
 		}
 		
 		$data['users_exists'] = $this->Message_Model->getUsersInExistConv();

 		if(empty($data['mess']))
 			$data['exist_mess'] = 0;

 		if(isset($_GET['mess'])){
 			$this->Message_Model->addNewMess($_GET['mess']);
 			header('Location: /'.$this->uri->segment(1).'/'.$this->uri->segment(2));
 			exit();
 		}

 		if($this->uri->segment(2)) {
	 		$data['name_to_user'] = $this->Message_Model->getUserName($this->uri->segment(2));
	 		$data['id_to_user'] = $this->uri->segment(2);
 		}

 		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		$this->load->vars($data);

		$this->load->view('Message_View');
	}
}