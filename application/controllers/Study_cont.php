<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Study_cont extends CI_Controller {

	function Study_cont() {
	parent::__construct();
	$this->load->library('session');
 	$this->load->model('Study');
	}

	function index(){
		if(!array_key_exists('name', $_SESSION)){
 			header('Location: /login/');
 			exit();
 		}
 		$data = array();
 		$data[] = '123';
 		$data[] = 'boss';
 		$data[] = 'klerk';
 		$data[] = 'buhgalter';
 		$data[] = 'helloworld';
 		$data[] = 'pass';
 		$data[] = 'pass123';
 		$data[] = '123456';
 		$data[] = 'hello';
	 	$temp['data'] = $this->Study->getAll($data);
	 	$this-> load-> vars($temp);
	 	$this-> load-> view('Study');
	}
}