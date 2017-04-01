<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_Controller extends CI_Controller {

	private $rkey;

	function Registration_Controller() {
		parent::__construct();

		$this->load->library('session');

		if(!$this->uri->segment(2))
	 		show_404();
	 	else
	 		$this->rkey = $this->uri->segment(2);

	 	$this->load->model('registration_model');

	 	if(!$this->registration_model->checkKey($this->rkey))
	 		show_404(); #todo должен показывать 403

	}

	function index(){

		$data['title'] = "Закрытая регистрация";
		$data['info'] = '';		

		if(isset($_POST) && array_key_exists('lname', $_POST))
			$data['info'] = $this->registration_model->checkData();

		$data['rkey'] = $this->rkey;
		$this->load->vars($data);
		$this->load->view('registration_view');
	}
}