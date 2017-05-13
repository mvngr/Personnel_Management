<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_Controller extends CI_Controller {
	function News_Controller() {
		parent::__construct();

		$this->load->library('session');
		$this->load->model('News_Model');
	}

	function index(){

		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}

 		$data['head_table'] = $this->News_Model->getColumnName();
 		$data['table_values'] = $this->News_Model->getNews();

		#menu
 		$this->load->model('Header_Model');
 		$data['menu'] = $this->Header_Model->loadAll();
 		
		$this->load->vars($data);

		$this->load->view('News_View');
	}
}