<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_cont extends CI_Controller {

	function Study_cont() {
	parent::__construct();
 	$this->load->model('Study');
	}

	function index(){
	 	$data['title'] = "Заголовок из контроллера";
	 	$data['info'] = "Данные из контроллера";
		
	 	$data['table'] = $this->Study->getAll();
	 	$this-> load-> vars($data);
	 	$this-> load-> view('Study');
	}
}