<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class temp extends CI_Controller {
	function temp() {
		parent::__construct();

	}

	function index(){

		

		$this->load->view('temp');
	}
}