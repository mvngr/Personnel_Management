<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Job extends CI_Controller {

	function Job() {
	parent::__construct();

	$this->load->library('session');
 	$this->load->model('JobM');
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
		$data['title'] = "Работа";

		$data['maindata'] = $this->JobM->allinfo();



		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();

		if($this->uri->segment(3) == 'edit' && ($this->uri->segment(4) == 'q' || !$this->uri->segment(4))) { #todo err
			$temp = $this->JobM->getEditData();

			foreach ($temp as $key => $value) {
				$data[$key] = $value;
				$this->load->vars($data);
				$this->load->view('Edit_Order_View');

			}
		}
		else {

			$this->load->vars($data);
			$this->load->view('DefaultView');
		}

	}
}