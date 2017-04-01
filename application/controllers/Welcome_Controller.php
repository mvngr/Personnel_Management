<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Controller extends CI_Controller {
	function Welcome_Controller() {
	parent::__construct();
		$this->load->library('session');
	}

	function index(){
		$this->load->view('welcome_view');

	}
}