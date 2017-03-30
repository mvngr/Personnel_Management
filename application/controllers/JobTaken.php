<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobTaken extends CI_Controller {
	function JobTaken() {
	parent::__construct();
	}

	function index(){
		$this->load->view('work_taken');

	}
}