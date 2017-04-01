<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyWelcome extends CI_Controller {

	public function index() {
		$this->load->library('session');
		$this->load->view('my_welcome_message');
	}

}